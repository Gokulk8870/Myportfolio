@extends('layouts.master')

@section('title', 'Collections - Jhan\'s Collections')

@section('styles')
<style>
    * {
        font-family: "Poppins", sans-serif;
    }
    body {
        padding-top: 90px;
        background: linear-gradient(135deg, #fff8fa, #ffe9f1);
        color: #333;
    }
    .hero {
        height: 70vh;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)),
          url("assets/Service Pages/personal-shopper-helping-cutomer.jpg")
          center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
    }
    .hero h1 {
        font-family: "Playfair Display", serif;
        font-size: 3rem;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 15px;
        padding: 15px 40px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(5px);
    }
    .products {
        padding: 90px 10%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }
    .product {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        position: relative;
        cursor: pointer;
    }
    .product:hover {
        box-shadow: 0 10px 30px rgba(233, 30, 99, 0.25);
        transform: translateY(-6px);
    }
    .product img {
        width: 100%;
        height: 350px;
        object-fit: cover;
        transition: transform 0.4s ease, filter 0.4s ease;
    }
    .product:hover img {
        transform: scale(1.05);
        filter: brightness(1.08);
    }
    .quick-view {
        position: absolute;
        inset: 0;
        background: rgba(233, 30, 99, 0.7);
        color: #fff;
        font-weight: 600;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    .product:hover .quick-view {
        opacity: 1;
    }
    .product-info {
        text-align: center;
        padding: 25px;
        background: #fffdfd;
    }
    .product-info h3 {
        font-family: "Playfair Display", serif;
        font-size: 1.4rem;
        margin-bottom: 8px;
        color: #111;
    }
    .stars {
        color: #f8b400;
        margin-bottom: 10px;
    }
    .price {
        color: #e91e63;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .product-info p {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 20px;
    }
    .product-info button {
        border: none;
        background: #e91e63;
        color: #fff;
        padding: 10px 28px;
        border-radius: 30px;
        font-size: 0.95rem;
        font-weight: 500;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(233, 30, 99, 0.3);
    }
    .product-info button:hover {
        background: #c2185b;
        transform: scale(1.05);
    }
    
    /* Mobile Responsive */
    @media (max-width: 768px) {
        body {
            padding-top: 70px;
        }
        .hero {
            height: 50vh;
        }
        .hero h1 {
            font-size: 2rem;
        }
        .products {
            padding: 50px 5%;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
        .product-info h3 {
            font-size: 1.2rem;
        }
        .product-info p {
            font-size: 0.9rem;
        }
        .product-info button {
            padding: 8px 20px;
            font-size: 0.9rem;
        }
    }
    
    @media (max-width: 480px) {
        body {
            padding-top: 60px;
        }
        .hero {
            height: 40vh;
        }
        .hero h1 {
            font-size: 1.5rem;
            padding: 10px 25px;
        }
        .products {
            padding: 40px 3%;
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .product {
            margin: 0 auto;
            max-width: 350px;
        }
        .product img {
            height: 300px;
        }
        .product-info {
            padding: 20px;
        }
        .product-info h3 {
            font-size: 1.1rem;
        }
        .price {
            font-size: 1.1rem;
        }
    }

</style>
@endsection

@section('content')
<section class="hero">
    <h1>Discover our exclusive collection of fashion items ✨</h1>
</section>

<!-- Subcategory Navigation -->
<section style="padding: 40px 10%; text-align: center; background: #fff;">
    <h2 style="margin-bottom: 30px; color: #333; font-family: 'Playfair Display', serif;">Shop by Category</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
        <a href="{{ route('shirts') }}" style="display: inline-block; background: #e91e63; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">Shirts</a>
        <a href="{{ route('category.show', ['category' => 'mens', 'subcategory' => 'pants']) }}" style="display: inline-block; background: #e91e63; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">Pants</a>
        <a href="{{ route('category.show', ['category' => 'womens', 'subcategory' => 'dresses']) }}" style="display: inline-block; background: #e91e63; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">Dresses</a>
        <a href="{{ route('category.show', ['category' => 'womens', 'subcategory' => 'tops']) }}" style="display: inline-block; background: #e91e63; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">Tops</a>
        <a href="{{ route('category.show', ['category' => 'kids-boys', 'subcategory' => 't-shirts']) }}" style="display: inline-block; background: #e91e63; color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">T-Shirts</a>
    </div>
</section>

<section class="products">
    <div class="product" onclick="window.location.href='{{ route('product.detail', 1) }}'">
        <div class="quick-view"><i class="fas fa-eye"></i>&nbsp; Quick View</div>
        <img src="{{ asset('assets/Service Pages/37edd82ef385e0e33bcddbdd885152be.jpg') }}" alt="Men's Casual Shirt">
        <div class="product-info">
            <h3>Men's Casual Shirt</h3>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
            <p class="price">₹1,299</p>
            <p>Premium quality casual shirt for everyday wear.</p>
            <button>Shop Now</button>
        </div>
    </div>

    <div class="product">
        <div class="quick-view"><i class="fas fa-eye"></i>&nbsp; Quick View</div>
        <img src="https://images.unsplash.com/photo-1520974659190-5d88c8e315c0?auto=format&fit=crop&w=800&q=80" alt="Evening Gown">
        <div class="product-info">
            <h3>Evening Gown</h3>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i></div>
            <p class="price">₹5,799</p>
            <p>Elegant and graceful satin gown for special nights.</p>
            <button>Shop Now</button>
        </div>
    </div>

    <div class="product">
        <div class="quick-view"><i class="fas fa-eye"></i>&nbsp; Quick View</div>
        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?auto=format&fit=crop&w=800&q=80" alt="Casual Dress">
        <div class="product-info">
            <h3>Casual Day Dress</h3>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></div>
            <p class="price">₹3,099</p>
            <p>Effortlessly chic design that fits any occasion.</p>
            <button>Shop Now</button>
        </div>
    </div>

    <div class="product">
        <div class="quick-view"><i class="fas fa-eye"></i>&nbsp; Quick View</div>
        <img src="https://images.unsplash.com/photo-1503342394128-c104d54dba01?auto=format&fit=crop&w=800&q=80" alt="Bridal Dress">
        <div class="product-info">
            <h3>Bridal Lehenga</h3>
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p class="price">₹14,999</p>
            <p>Intricate embroidery and detailed handwork.</p>
            <button>Shop Now</button>
        </div>
    </div>
</section>


@endsection