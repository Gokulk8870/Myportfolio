<!DOCTYPE html>
<html>
<head>
    <title>Admin Products Display - Jhan's Collections</title>
<style>
    * {
        font-family: "Poppins", sans-serif;
    }
    body {
        padding-top: 90px;
        background: #f5f5f5;
    }
    .header {
        background: #e91e63;
        color: white;
        padding: 30px;
        text-align: center;
        margin-bottom: 40px;
    }
    .category-section {
        margin-bottom: 60px;
        padding: 0 2%;
        background: white;
        border-radius: 15px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        margin: 0 20px 40px;
        padding: 30px 20px;
    }
    .category-title {
        font-size: 2.2rem;
        color: #e91e63;
        margin-bottom: 35px;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-weight: 700;
        position: relative;
        padding-bottom: 15px;
    }
    .category-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, #e91e63, #c2185b);
        border-radius: 2px;
    }
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 25px;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .product-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.15);
        border-color: #e91e63;
    }
    .product-image {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    .product-card:hover .product-image {
        transform: scale(1.05);
    }
    .product-info {
        padding: 18px;
        text-align: center;
        background: linear-gradient(to bottom, #fff, #fafafa);
    }
    .product-info h3 {
        font-size: 1.2rem;
        margin-bottom: 8px;
        color: #333;
        font-weight: 600;
        line-height: 1.3;
    }
    .product-price {
        font-size: 1.3rem;
        color: #e91e63;
        font-weight: 700;
        margin-bottom: 15px;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    .btn {
        padding: 10px 16px !important;
        border-radius: 8px !important;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    button {
        padding: 10px 16px !important;
        border-radius: 8px !important;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.2s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    button:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    .no-products {
        text-align: center;
        color: #666;
        font-style: italic;
        padding: 40px;
    }
</style>
</head>
<body>
<div class="header">
    <h1>Admin Products Display</h1>
    <p>Products categorized by type</p>
</div>

@if($products->isEmpty())
    <div class="no-products">
        <h2>No products added yet</h2>
        <p>Add products through the admin panel to see them here</p>
    </div>
@else
    @foreach($products as $category => $categoryProducts)
        <div class="category-section">
            <h2 class="category-title">{{ ucfirst(str_replace('-', ' ', $category)) }}</h2>
            <div class="products-grid">
               @foreach($categoryProducts as $product)
                    <div class="product-card">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
                        <div class="product-info">
                            <h3>{{ $product->name }}</h3>
                            <div class="product-price">${{ $product->price }}</div>
                            <div style="margin-top: 15px;">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn" style="background: #28a745; color: white; padding: 8px 15px; border-radius: 5px; text-decoration: none; margin-right: 10px;">Edit</a>
                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: #dc3545; color: white; padding: 8px 15px; border: none; border-radius: 5px; cursor: pointer;" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endif
</body>
</html>
