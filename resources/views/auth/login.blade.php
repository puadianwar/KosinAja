<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: url('https://dashboard.codeparrot.ai/api/image/Z85iThbGT4L4LIzE/rectangl.png') center/cover no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: 100% 200%;
        }

        .login-card {
            width: 90%;
            max-width: 400px;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color:rgb(117, 87, 50);
            color: white;
        }
    </style>
</head>
<body>
    <div class="login-card">
        @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h3 class="text-center">Login</h3>
        <form action="{{ route('postLogin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="text-secondary">Email</label>
                <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label class="text-secondary">Password</label>
                <input type="password" class="form-control" name="password">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="form-control btn btn-custom mt-4">Login</button>
        </form>
        <p class="mt-3 text-center">
            Belum punya akun? <a href="{{ route('auth.register') }}" class="text-decoration-none">Daftar</a>
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>