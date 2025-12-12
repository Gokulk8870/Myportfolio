<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        * { font-family: "Poppins", sans-serif; }
        body { margin: 0; background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-container { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: 300px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: 500; }
        input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        .btn { background: #e91e63; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; width: 100%; }
        .btn:hover { background: #c2185b; }
        .error { color: red; margin-bottom: 15px; }
        h2 { text-align: center; margin-bottom: 30px; color: #333; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        @if(session('error'))
            <div class="error">{{ session('error') }}</div>
        @endif
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>