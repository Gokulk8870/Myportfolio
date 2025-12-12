<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function shirts()
    {
        $products = Product::where('subcategory', 'shirts')->get();
        return view('website.shirts', compact('products'));
    }

    public function category($category, $subcategory)
    {
        $products = Product::where('category', $category)
                          ->where('subcategory', $subcategory)
                          ->get();
        
        return view('website.category', compact('products', 'category', 'subcategory'));
    }
}