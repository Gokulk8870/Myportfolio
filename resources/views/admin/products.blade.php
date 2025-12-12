<!DOCTYPE html>
<html>
<head>
    <title>Admin - Products</title>
    <style>
        * { font-family: "Poppins", sans-serif; }
        body { margin: 0; background: #f5f5f5; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; }
        .header { background: #e91e63; color: white; padding: 30px; text-align: center; border-radius: 10px; margin-bottom: 30px; }
        .form-container { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 25px; }
        label { display: block; margin-bottom: 8px; font-weight: 500; color: #333; }
        input, select { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; }
        .btn { background: #e91e63; color: white; padding: 12px 30px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .btn:hover { background: #c2185b; }
        .alert { padding: 15px; margin: 20px 0; border-radius: 5px; background: #d4edda; color: #155724; }
        .logout-btn { position: absolute; top: 20px; right: 20px; background: #dc3545; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; }
        .logout-btn:hover { background: #c82333; }
    </style>
</head>
<body>
    <a href="{{ route('admin.logout') }}" class="logout-btn">Logout</a>

    <div class="container">
        <div class="header">
            <h1>Product Management</h1>
            <p>Add new products to your collection</p>
        </div>

    <div class="container">
        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert" style="background: #f8d7da; color: #721c24;">{{ session('error') }}</div>
        @endif

        <div class="form-container">
            <h2>Add New Product</h2>
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" required>
                </div>
                <div class="form-group">
                    <label>Price (Optional)</label>
                    <input type="number" step="0.01" name="price">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select name="category" required>
                        <option value="">Select Category</option>
                        <option value="mens">Mens</option>
                        <option value="womens">Womens</option>
                        <option value="kids-boys">Kids Boys</option>
                        <option value="kids-girls">Kids Girls</option>
                        <option value="home-textiles">Home Textiles</option>
                        <option value="inners">Inners</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Subcategory</label>
                    <select name="subcategory" required>
                        <option value="">Select Subcategory</option>
                        <option value="shirts">Shirts</option>
                        <option value="pants">Pants</option>
                        <option value="dresses">Dresses</option>
                        <option value="tops">Tops</option>
                        <option value="t-shirts">T-Shirts</option>
                        <option value="jeans">Jeans</option>
                        <option value="jackets">Jackets</option>
                        <option value="shoes">Shoes</option>
                        <option value="accessories">Accessories</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Product Image *</label>
                    <input type="file" name="image" accept="image/*" required>
                </div>
                <button type="submit" class="btn">Add Product</button>
            </form>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <a href="{{ route('admin.products.display') }}" class="btn" style="font-size: 1.1rem; padding: 15px 30px;">View All Products</a>
        </div>
    </div>
</body>
</html>
