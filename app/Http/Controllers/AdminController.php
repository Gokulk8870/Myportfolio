<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function edit($id)
    {
        try {
            $product = Product::findOrFail($id);
            return view('admin.edit-product', compact('product'));
        } catch (\Exception $e) {
            return redirect()->route('admin.products')->with('error', 'Product not found');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'nullable|numeric|min:0',
                'category' => 'required|string',
                'subcategory' => 'required|string',
                'image' => 'required|image|max:5000'
            ]);

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);

            Product::create([
                'name' => $request->name,
                'price' => $request->price ?: 0,
                'category' => $request->category,
                'subcategory' => $request->subcategory,
                'image' => 'uploads/'.$imageName
            ]);

            return redirect()->back()->with('success', 'Product added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding product: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);
            
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'nullable|numeric|min:0',
                'category' => 'required|string',
                'subcategory' => 'required|string',
                'image' => 'nullable|image|max:5000'
            ]);

            $data = [
                'name' => $request->name,
                'price' => $request->price ?: 0,
                'category' => $request->category,
                'subcategory' => $request->subcategory
            ];

            if ($request->hasFile('image')) {
                // Delete old image
                if ($product->image && file_exists(public_path($product->image))) {
                    unlink(public_path($product->image));
                }
                
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads'), $imageName);
                $data['image'] = 'uploads/'.$imageName;
            }

            $product->update($data);
            return redirect()->route('admin.products.display')->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating product: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            
            // Delete image file
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }
            
            $product->delete();
            return redirect()->back()->with('success', 'Product deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting product: ' . $e->getMessage());
        }
    }

    public function deleteImage($id)
    {
        try {
            $product = Product::findOrFail($id);
            
            if ($product->image && strpos($product->image, 'uploads/') === 0 && file_exists(public_path($product->image))) {
                @unlink(public_path($product->image));
            }
            
            $product->update(['image' => '']);
            
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}