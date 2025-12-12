@extends('layouts.master')

@section('title', 'Product Details - Jhan\'s Collections')

@section('styles')
<style>
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        height: 90px;
        background: white;
        padding: 0px 50px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .navbar ul li a {
        font-family: 'Poppins', sans-serif;
        color: black;
        padding: 0 12px;
        font-size: 0.8em;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .navbar ul li a:hover {
        color: #4bbc43;
    }

    .navbar .brand {
        font-family: saveurSans;
        font-size: 1.8em;
        color: black;
        text-decoration: none;
    }

    .product-detail {
        padding: 120px 5% 50px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .product-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: start;
    }

    .product-image {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .product-info h1 {
        font-size: 2.5rem;
        color: #111;
        margin-bottom: 20px;
    }

    .product-price {
        font-size: 2rem;
        color: #4bbc43;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .product-description {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #666;
        margin-bottom: 30px;
    }

    .product-actions {
        display: flex;
        gap: 15px;
    }

    .btn {
        padding: 12px 30px;
        border: none;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: #4bbc43;
        color: white;
    }

    .btn-primary:hover {
        background: #c2185b;
    }

    .btn-secondary {
        background: transparent;
        color: #4bbc43;
        border: 2px solid #4bbc43;
    }

    .btn-secondary:hover {
        background: #4bbc43;
        color: white;
    }

    .footer {
        text-align: center;
        padding: 20px;
        background: #111;
        color: white;
    }

    @media (max-width: 768px) {
        .product-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }
    }
</style>
@endsection

@section('content')
<div class="product-detail">
    <div class="product-content">
        <div class="product-image-container">
            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">
        </div>

        <div class="product-info">
            <h1>{{ $product->name }}</h1>
            @if($product->price > 0)
                <div class="product-price">₹{{ number_format($product->price) }}</div>
            @endif
            <div class="product-description">
                Category: {{ ucwords(str_replace('-', ' ', $product->category)) }}
                @if($product->subcategory)
                    <br>Type: {{ ucwords($product->subcategory) }}
                @endif
            </div>

            <div class="product-actions">
                <button class="btn btn-primary">Add to Cart</button>
                <button class="btn btn-secondary" onclick="window.location.href='{{ route('products') }}'">Back to Products</button>
            </div>
        </div>
    </div>
</div>
@endsection
