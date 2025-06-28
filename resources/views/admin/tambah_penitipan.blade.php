<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Penitipan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background-color: #f9f9f9;
    }

    .container {
      background: white;
      border: 1px solid #ccc;
      padding: 30px;
      max-width: 600px;
      margin: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    h2 {
      color: #2c3e50;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .buttons {
      margin-top: 25px;
      display: flex;
      gap: 10px;
    }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      color: white;
      text-decoration: none;
      display: inline-block;
    }

    .btn-submit {
      background-color: #28a745;
    }

    .btn-cancel {
      background-color: #7f8c8d;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>Tambah Data Penitipan</h2>

    @if ($errors->any())
      <div class="error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.penitipan.store') }}" method="POST">
      @csrf

      <label for="nama">Nama Pelanggan</label>
      <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>

      <label for="jumlah_barang">Jumlah Barang</label>
      <input type="number" id="jumlah_barang" name="jumlah_barang" value="{{ old('jumlah_barang') }}" required>

      <label for="tanggal_awal">Tanggal Mulai</label>
      <input type="date" id="tanggal_awal" name="tanggal_awal" value="{{ old('tanggal_awal') }}" required>

      <label for="tanggal_akhir">Tanggal Selesai</label>
      <input type="date" id="tanggal_akhir" name="tanggal_akhir" value="{{ old('tanggal_akhir') }}" required>

      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>

      <div class="buttons">
        <button type="submit" class="btn btn-submit">Simpan</button>
        <a href="{{ route('admin.penitipan') }}" class="btn btn-cancel">Batal</a>
      </div>
    </form>
  </div>

</body>
</html>