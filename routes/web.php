<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Models\Product;

// Home Page
Route::get('/', function () {
    return view('website.home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('website.about');
})->name('about');

//collection
Route::get('/collections',function() {
    return view('website.collections');
})->name('collections');

// Contact Page
Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');

// Terms of Service Page
Route::get('/terms', function () {
    return view('website.terms');
})->name('terms');

// Privacy Policy Page
Route::get('/privacy', function () {
    return view('website.privacy');
})->name('privacy');

// Products Page
Route::get('/products', function (Illuminate\Http\Request $request) {
    try {
        // Auto-seed if no products exist
        if (Product::count() === 0) {
            Product::create(['name' => 'Men\'s Casual Shirt', 'price' => 1299, 'category' => 'mens', 'subcategory' => 'shirts', 'image' => 'assets/Service Pages/37edd82ef385e0e33bcddbdd885152be.jpg']);
            Product::create(['name' => 'Men\'s Formal Shirt', 'price' => 1899, 'category' => 'mens', 'subcategory' => 'shirts', 'image' => 'assets/Service Pages/v8.jpg']);
            Product::create(['name' => 'Women\'s Elegant Dress', 'price' => 2499, 'category' => 'womens', 'subcategory' => 'dresses', 'image' => 'assets/Service Pages/cb7141083471301d19c4d24f09a7d42c.jpg']);
            Product::create(['name' => 'Women\'s Fashion Top', 'price' => 1599, 'category' => 'womens', 'subcategory' => 'tops', 'image' => 'assets/Service Pages/v33.jpg']);
            Product::create(['name' => 'Boys Cool T-Shirt', 'price' => 799, 'category' => 'kids-boys', 'subcategory' => 't-shirts', 'image' => 'assets/Service Pages/front-view-little-kid-blue-t-shirt-khaki-trousers-riding-segway-pink-space.jpg']);
            Product::create(['name' => 'Boys Casual Shirt', 'price' => 899, 'category' => 'kids-boys', 'subcategory' => 'shirts', 'image' => 'assets/Service Pages/leo.webp']);
            Product::create(['name' => 'Girls Pretty Hat', 'price' => 599, 'category' => 'kids-girls', 'subcategory' => 'accessories', 'image' => 'assets/Service Pages/close-up-girl-wearing-hat.jpg']);
            Product::create(['name' => 'Girls Fashion Dress', 'price' => 999, 'category' => 'kids-girls', 'subcategory' => 'dresses', 'image' => 'assets/Service Pages/v99.webp']);
            Product::create(['name' => 'Home Textile Item', 'price' => 1299, 'category' => 'home-textiles', 'subcategory' => 'accessories', 'image' => 'assets/Service Pages/v88.webp']);
            Product::create(['name' => 'Premium Bedsheets', 'price' => 1799, 'category' => 'home-textiles', 'subcategory' => 'accessories', 'image' => 'assets/Service Pages/personal-shopper-helping-cutomer.jpg']);
            Product::create(['name' => 'Inner Wear', 'price' => 699, 'category' => 'inners', 'subcategory' => 'accessories', 'image' => 'assets/Service Pages/v99.webp']);
            Product::create(['name' => 'Premium Undergarments', 'price' => 899, 'category' => 'inners', 'subcategory' => 'accessories', 'image' => 'assets/Service Pages/leo.webp']);
        }

        $query = Product::query();
        if ($request->has('category') && $request->category !== 'all') {
            $query->where('category', $request->category);
        } else {
            // Only exclude shirts from "All" products view
            $query->where('subcategory', '!=', 'shirts');
        }
        $products = $query->get();
        $selectedCategory = $request->get('category', 'all');
    } catch (Exception $e) {
        $products = collect();
        $selectedCategory = 'all';
    }
    return view('website.products', compact('products', 'selectedCategory'));
})->name('products');

// Product Detail Page
Route::get('/product/{id}', function ($id) {
    $product = Product::findOrFail($id);
    return view('website.product-detail', compact('product'));
})->name('product.detail');

// Category Routes
Route::get('/shirts', [CategoryController::class, 'shirts'])->name('shirts');
Route::get('/category/{category}/{subcategory}', [CategoryController::class, 'category'])->name('category.show');

// Admin Root - Redirect to Login
Route::get('/admin', function () {
    return redirect()->route('admin.login.form');
});

// Admin Login
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login.form');

Route::post('/admin/login', function (Illuminate\Http\Request $request) {
    if ($request->username === 'admin' && $request->password === '12345') {
        session(['admin_logged_in' => true]);
        return redirect()->route('admin.products');
    }
    return back()->with('error', 'Invalid credentials');
})->name('admin.login');

Route::get('/admin/logout', function () {
    session()->forget('admin_logged_in');
    return redirect()->route('admin.login.form');
})->name('admin.logout');

// Admin Routes (Protected)
Route::get('/admin/products', function () {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }
    return view('admin.products');
})->name('admin.products');

Route::post('/admin/products', function (Illuminate\Http\Request $request) {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }
    return app(AdminController::class)->store($request);
})->name('admin.products.store');

Route::get('/admin/products/{id}/edit', function ($id) {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }
    return app(AdminController::class)->edit($id);
})->name('admin.products.edit');

Route::put('/admin/products/{id}', function (Illuminate\Http\Request $request, $id) {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }
    return app(AdminController::class)->update($request, $id);
})->name('admin.products.update');

Route::delete('/admin/products/{id}', function ($id) {
    if (!session('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }
    return app(AdminController::class)->destroy($id);
})->name('admin.products.destroy');

Route::post('/admin/products/{id}/delete-image', function ($id) {
    if (!session('admin_logged_in')) {
        return response()->json(['success' => false]);
    }
    return app(AdminController::class)->deleteImage($id);
})->name('admin.products.delete-image');

// Admin Products Display Page
Route::get('/admin-products-display', function () {
    try {
        $products = Product::all()->groupBy('category');
    } catch (Exception $e) {
        $products = collect();
    }
    return view('admin.products-display', compact('products'));
})->name('admin.products.display');

// Seed Sample Products
Route::get('/seed-products', function () {
    try {
        // Clear existing products first
        Product::truncate();

        Product::create([
            'name' => 'Men\'s Casual Shirt',
            'price' => 1299,
            'category' => 'mens',
            'subcategory' => 'shirts',
            'image' => 'assets/Service Pages/37edd82ef385e0e33bcddbdd885152be.jpg'
        ]);

        Product::create([
            'name' => 'Men\'s Formal Shirt',
            'price' => 1899,
            'category' => 'mens',
            'subcategory' => 'shirts',
            'image' => 'assets/Service Pages/v8.jpg'
        ]);

        Product::create([
            'name' => 'Women\'s Elegant Dress',
            'price' => 2499,
            'category' => 'womens',
            'subcategory' => 'dresses',
            'image' => 'assets/Service Pages/cb7141083471301d19c4d24f09a7d42c.jpg'
        ]);

        Product::create([
            'name' => 'Women\'s Fashion Top',
            'price' => 1599,
            'category' => 'womens',
            'subcategory' => 'tops',
            'image' => 'assets/Service Pages/v33.jpg'
        ]);

        Product::create([
            'name' => 'Boys Cool T-Shirt',
            'price' => 799,
            'category' => 'kids-boys',
            'subcategory' => 't-shirts',
            'image' => 'assets/Service Pages/front-view-little-kid-blue-t-shirt-khaki-trousers-riding-segway-pink-space.jpg'
        ]);

        Product::create([
            'name' => 'Boys Casual Shirt',
            'price' => 899,
            'category' => 'kids-boys',
            'subcategory' => 'shirts',
            'image' => 'assets/Service Pages/leo.webp'
        ]);

        Product::create([
            'name' => 'Girls Pretty Hat',
            'price' => 599,
            'category' => 'kids-girls',
            'subcategory' => 'accessories',
            'image' => 'assets/Service Pages/close-up-girl-wearing-hat.jpg'
        ]);

        Product::create([
            'name' => 'Girls Fashion Dress',
            'price' => 999,
            'category' => 'kids-girls',
            'subcategory' => 'dresses',
            'image' => 'assets/Service Pages/v99.webp'
        ]);

        Product::create([
            'name' => 'Home Textile Item',
            'price' => 1299,
            'category' => 'home-textiles',
            'subcategory' => 'accessories',
            'image' => 'assets/Service Pages/v88.webp'
        ]);

        Product::create([
            'name' => 'Premium Bedsheets',
            'price' => 1799,
            'category' => 'home-textiles',
            'subcategory' => 'accessories',
            'image' => 'assets/Service Pages/personal-shopper-helping-cutomer.jpg'
        ]);

        Product::create([
            'name' => 'Inner Wear',
            'price' => 699,
            'category' => 'inners',
            'subcategory' => 'accessories',
            'image' => 'assets/Service Pages/v99.webp'
        ]);

        Product::create([
            'name' => 'Premium Undergarments',
            'price' => 899,
            'category' => 'inners',
            'subcategory' => 'accessories',
            'image' => 'assets/Service Pages/leo.webp'
        ]);

        return 'Sample products added successfully! Total: ' . Product::count();
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});

// Test route to check products
Route::get('/test-products', function () {
    try {
        $products = Product::all();
        $html = '<h2>Products in Database: ' . $products->count() . '</h2>';
        foreach ($products as $product) {
            $html .= '<p>' . $product->name . ' - Category: ' . $product->category . '</p>';
        }
        return $html;
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});
