<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: url('https://dashboard.codeparrot.ai/api/image/Z85iThbGT4L4LIzE/rectangl.png') center/cover no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            background-size: 100% 200%;
            padding-right: 30%;
        }

        .container-register {
            width: 100%;
            max-width: 700px;
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
    <div class="container mt-3"> 
        @if (Session::get('failed')) 
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                <strong>Registrasi Gagal!</strong> {{ Session::get('success') }} 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> 
            </div> 
        @endif 
    </div> 

    <div class="d-flex justify-content-center align-items-center w-100" style="height: 100vh;">
        <div class="card container-register">
            <div class="card-body p-4">
                <h3 class="card-title text-center">Register</h3>
                <form action="{{ route('postRegister') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="text-secondary">Nama Anda</label>
                        <input type="text" class="form-control border border-secondary form-control-lg" name="name"  required value="{{ old('name') }}"> 
                        <span class="text-danger"> 
                            @error('name') 
                                {{ $message }} 
                            @enderror 
                        </span> 
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-secondary">Email Anda</label>
                        <input type="email" class="form-control border border-secondary form-control-lg" name="email"  required value="{{ old('email') }}"> 
                        <span class="text-danger"> 
                            @error('email') 
                                {{ $message }} 
                            @enderror 
                        </span> 
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-secondary">Pilih Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-secondary">Password Anda</label>
                        <input type="password" class="form-control border border-secondary form-control-lg" name="password">
                        <span class="text-danger"> 
                            @error('password') 
                                {{ $message }} 
                            @enderror 
                        </span> 
                    </div>

                    <div class="form-group mt-3">
                        <label class="text-secondary">Konfirmasi Password Anda</label>
                        <input type="password" class="form-control border border-secondary form-control-lg" name="password_confirmation" required>
                        <span class="text-danger"> 
                            @error('password_confirmation') 
                                {{ $message }} 
                            @enderror 
                        </span> 
                    </div>

                    <button type="submit" class="form-control btn btn-custom mt-4">Register</button>
                </form>

                <p class="mt-3 text-center">
                    Sudah punya akun? <a href="{{ route('auth.login') }}" style="text-decoration: none;">Ayo masuk!</a>
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
