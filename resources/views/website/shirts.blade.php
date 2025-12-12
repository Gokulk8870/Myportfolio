@extends('layouts.master')

@section('title', 'Shirts Collection')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Shirts Collection</h1>
    
    @if($products->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-600 mb-2">₹{{ number_format($product->price) }}</p>
                        <a href="{{ route('product.detail', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
                            View Details
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-12">
            <h2 class="text-xl text-gray-600">No shirts available at the moment</h2>
            <p class="text-gray-500 mt-2">Check back later for new arrivals!</p>
        </div>
    @endif
</div>
@endsection