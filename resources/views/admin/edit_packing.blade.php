<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Packing - KosinAja</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Inter', sans-serif; margin: 0; display: flex; }

    .sidebar {
      width: 220px;
      background-color: #653800;
      height: 100vh;
      padding: 20px 10px;
      color: white;
    }

    .sidebar img.logo {
      width: 180px;
      margin-bottom: 30px;
      display: block;
      margin: 0 auto;
    }

    .nav-menu {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .nav-item {
      display: flex;
      align-items: center;
      gap: 10px;
      color: white;
      text-decoration: none;
      font-weight: 500;
      padding: 8px;
      border-radius: 8px;
    }

    .nav-item:hover { background-color: rgba(255, 255, 255, 0.2); }

    .main-content {
      flex-grow: 1;
      padding: 30px;
      background-color: #f9f9f9;
      width: 100%;
    }

    .top-bar {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      margin-bottom: 20px;
    }

    .logout-button {
      padding: 8px 12px;
      background-color: #a65b00;
      color: white;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      font-weight: 500;
    }

    .logout-button:hover { background-color: #884800; }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-family: 'Inter', sans-serif;
    }

    textarea {
      resize: vertical;
      min-height: 80px;
    }

    .btn {
      display: inline-block;
      padding: 10px 16px;
      font-weight: 600;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-primary {
      background-color: #007bff;
      color: white;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .btn-secondary {
      background-color: #6c757d;
      color: white;
    }

    .btn-secondary:hover {
      background-color: #565e64;
    }

    .alert {
      padding: 10px;
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
      border-radius: 6px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <img src="https://dashboard.codeparrot.ai/api/image/Z80nLNG_8Dy7NbDW/image.png" class="logo" alt="Kosinaja Logo">
    <div class="nav-menu">
      <a href="{{ route('admin.home') }}" class="nav-item"><i class="fa fa-home"></i> Dashboard</a>
      <a href="{{ route('admin.history') }}" class="nav-item"><i class="fa fa-clock-rotate-left"></i> History</a>
      <a href="{{ route('admin.penitipan') }}" class="nav-item"><i class="fa fa-box"></i> Penitipan</a>
      <a href="{{ route('admin.packing') }}" class="nav-item"><i class="fa fa-box-open"></i> Packing</a>
      <a href="#" class="nav-item"><i class="fa fa-truck-moving"></i> Angkut</a>
      <a href="{{ route('admin.pelanggan') }}" class="nav-item"><i class="fa fa-users"></i> Pelanggan</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="top-bar">
      <a href="{{ route('logout') }}" class="logout-button">Logout</a>
    </div>

    <h2>Edit Penitipan</h2>

    @if ($errors->any())
      <div class="alert">
        <strong>Terjadi kesalahan:</strong>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('admin.update_packing', $data->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $data->nama) }}" required>
      </div>

      <div class="form-group">
        <label>No Hp</label>
        <input type="number" name="no_hp" value="{{ old('no_hp', $data->no_ho) }}" required>
      </div>

      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" required>{{ old('alamat', $data->alamat) }}</textarea>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('admin.packing') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>

</body>
</html>
