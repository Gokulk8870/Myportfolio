 @extends('layouts.master')

@section('title', 'Products - Jhan\'s Collections')

@section('styles')
<style>
    .videobg {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        overflow: hidden;
        opacity: 0;
        animation: fadeIn 2s ease-in-out forwards;
    }

    @keyframes fadeIn {
        to { opacity: 1; }
    }

    .videobg h2 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        color: white;
        font-size: 3.5rem;
        font-family: 'Georgia', serif;
        font-weight: 700;
        font-style: italic;
        text-shadow: 3px 3px 10px rgba(0,0,0,0.7);
        letter-spacing: 2px;
    }

    .video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(70%);
    }

    .products-container {
        padding: 30px 5% 50px;
        background: #f9f9f9;
    }

    .products-header {
        text-align: center;
        margin-bottom: 50px;
    }

    /* CATEGORY FILTER STYLING */
    .category-filter {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;              /* IMPORTANT: Makes it responsive */
        row-gap: 15px;                /* Space between rows */
        max-width: 900px;
        margin: 20px auto;
        padding: 0 10px;
    }

    .filter-btn {
        padding: 10px 20px;
        border: 2px solid  #4bbc43;
        background: transparent;
        color:  #4bbc43;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        white-space: nowrap;          /* Prevents text breaking */
        font-size: 1rem;
    }

    .filter-btn:hover,
    .filter-btn.active {
        background:  #4bbc43;
        color: #fff;
    }

    /* TABLET VIEW */
    @media (max-width: 768px) {
        .filter-btn {
            padding: 8px 14px;
            font-size: 0.9rem;
        }
    }

    /* MOBILE VIEW */
    @media (max-width: 480px) {
        .category-filter {
            gap: 10px;
            row-gap: 12px;
            padding: 0 5px;
        }

        .filter-btn {
            padding: 8px 12px;
            font-size: 0.85rem;
        }
    }

    /* PRODUCT GRID */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .product-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .product-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .product-info {
        padding: 20px;
        text-align: center;
    }

    .product-info h3 {
        font-size: 1.3rem;
        margin-bottom: 10px;
        color: #111;
        font-weight: 500;
    }

    .product-category {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 1.2rem;
        color:  #4bbc43;
        font-weight: bold;
        margin-bottom: 15px;
    }

</style>
@endsection

@section('content')
<section class="videobg">
    <img src="{{ asset('assets/Service Pages/v8.jpg') }}" alt="Our Products" class="video">
</section>

<div class="products-container">
    <div class="products-header">
        <p style="font-family: 'Dancing Script', cursive; font-size: 1.3rem;">
            Discover our exclusive collection of fashion items
        </p>

        <!-- CATEGORY FILTER BAR (RESPONSIVE) -->
        <div class="category-filter">
            <a href="/products" class="filter-btn {{ request('category') ? '' : 'active' }}">All</a>
            <a href="/products?category=mens" class="filter-btn {{ request('category')=='mens' ? 'active' : '' }}">Mens</a>
            <a href="/products?category=womens" class="filter-btn {{ request('category')=='womens' ? 'active' : '' }}">Womens</a>

            <a href="/products?category=home-textiles" class="filter-btn {{ request('category')=='home-textiles' ? 'active' : '' }}">Home Textiles</a>
            <a href="/products?category=inners" class="filter-btn {{ request('category')=='inners' ? 'active' : '' }}">Inners</a>
        </div>
    </div>

    <!-- PRODUCT LIST GRID -->
    <div class="products-grid">
        @if(isset($products))
            @foreach($products as $product)
                <div class="product-card" data-category="{{ $product->category }}" onclick="window.location.href='{{ route('product.detail', $product->id) }}'" style="cursor: pointer;">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="product-image">

                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>

                        <div class="product-category">
                            {{ ucwords(str_replace('-', ' ', $product->category)) }}
                        </div>

                        @if($product->price > 0)
                            <div class="product-price">₹{{ $product->price }}</div>
                        @endif
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection

@section('scripts')
<script>
// Highlights the selected category
document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const category = urlParams.get("category");

    // Get the full URL path to match exactly
    const currentUrl = window.location.href;

    document.querySelectorAll(".filter-btn").forEach(btn => {
        // Remove active class first
        btn.classList.remove("active");

        // For "All" button (no category parameter)
        if (!category && btn.getAttribute('href') === '/products') {
            btn.classList.add("active");
        }

        // For category buttons - check exact match
        if (category) {
            // Get the exact category from the button's href
            const btnUrl = new URL(btn.href, window.location.origin);
            const btnCategory = btnUrl.searchParams.get("category");

            // Exact match comparison
            if (btnCategory === category) {
                btn.classList.add("active");
            }
        }
    });
});
</script>
@endsection
