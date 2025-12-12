<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        * { font-family: "Poppins", sans-serif; }
        body { margin: 0; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        .header { background: #e91e63; color: white; padding: 20px; text-align: center; position: relative; }
        .form-container { background: white; padding: 30px; margin: 20px 0; border-radius: 10px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: 500; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        .btn { background: #e91e63; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn:hover { background: #c2185b; }
        .btn-secondary { background: #666; }
        .btn-secondary:hover { background: #555; }
        .current-image { width: 200px; height: 150px; object-fit: cover; border-radius: 5px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Edit Product</h1>
        <a href="{{ route('admin.products.display') }}" style="position: absolute; top: 20px; left: 20px; color: white; text-decoration: none; background: rgba(255,255,255,0.2); padding: 8px 15px; border-radius: 5px;">← Back</a>
        <a href="{{ route('admin.logout') }}" style="position: absolute; top: 20px; right: 20px; color: white; text-decoration: none; background: rgba(255,255,255,0.2); padding: 8px 15px; border-radius: 5px;">Logout</a>
    </div>

    <div class="container">
        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; margin: 20px 0; border-radius: 5px;">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div style="background: #f8d7da; color: #721c24; padding: 15px; margin: 20px 0; border-radius: 5px;">{{ session('error') }}</div>
        @endif
        @if($errors->any())
            <div style="background: #f8d7da; color: #721c24; padding: 15px; margin: 20px 0; border-radius: 5px;">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="form-container">
            <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" value="{{ $product->name }}" required>
                </div>
                <div class="form-group">
                    <label>Price (Optional)</label>
                    <input type="number" step="0.01" name="price" value="{{ $product->price }}">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category" required>
                        <option value="mens" {{ $product->category == 'mens' ? 'selected' : '' }}>Mens</option>
                        <option value="womens" {{ $product->category == 'womens' ? 'selected' : '' }}>Womens</option>
                        <option value="kids-boys" {{ $product->category == 'kids-boys' ? 'selected' : '' }}>Kids Boys</option>
                        <option value="kids-girls" {{ $product->category == 'kids-girls' ? 'selected' : '' }}>Kids Girls</option>
                        <option value="home-textiles" {{ $product->category == 'home-textiles' ? 'selected' : '' }}>Home Textiles</option>
                        <option value="inners" {{ $product->category == 'inners' ? 'selected' : '' }}>Inners</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Subcategory</label>
                    <select name="subcategory" required>
                        <option value="shirts" {{ ($product->subcategory ?? '') == 'shirts' ? 'selected' : '' }}>Shirts</option>
                        <option value="pants" {{ ($product->subcategory ?? '') == 'pants' ? 'selected' : '' }}>Pants</option>
                        <option value="dresses" {{ ($product->subcategory ?? '') == 'dresses' ? 'selected' : '' }}>Dresses</option>
                        <option value="tops" {{ ($product->subcategory ?? '') == 'tops' ? 'selected' : '' }}>Tops</option>
                        <option value="t-shirts" {{ ($product->subcategory ?? '') == 't-shirts' ? 'selected' : '' }}>T-Shirts</option>
                        <option value="jeans" {{ ($product->subcategory ?? '') == 'jeans' ? 'selected' : '' }}>Jeans</option>
                        <option value="jackets" {{ ($product->subcategory ?? '') == 'jackets' ? 'selected' : '' }}>Jackets</option>
                        <option value="shoes" {{ ($product->subcategory ?? '') == 'shoes' ? 'selected' : '' }}>Shoes</option>
                        <option value="accessories" {{ ($product->subcategory ?? '') == 'accessories' ? 'selected' : '' }}>Accessories</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Current Image</label>
                    <div style="position: relative; display: inline-block;">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="current-image">
                        <button type="button" onclick="deleteImage({{ $product->id }})" style="position: absolute; top: 5px; right: 5px; background: #dc3545; color: white; border: none; border-radius: 50%; width: 30px; height: 30px; cursor: pointer; font-size: 14px;">×</button>
                    </div>
                </div>
                <div class="form-group">
                    <label>New Image (optional)</label>
                    <input type="file" name="image" accept="image/*">
                </div>
                <button type="submit" class="btn">Update Product</button>
                <a href="{{ route('admin.products.display') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
<script>
function deleteImage(productId) {
    if (confirm('Are you sure you want to delete this image?')) {
        fetch(`/admin/products/${productId}/delete-image`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error deleting image');
            }
        });
    }
}
</script>
</body>
</html>