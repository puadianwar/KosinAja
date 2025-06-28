<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Penitipan - KosinAja</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    body { font-family: 'Inter', sans-serif; margin: 0; background-color: #f4f4f4; }
    .container { max-width: 800px; margin: 40px auto; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
    h2 { color: #653800; margin-bottom: 20px; }
    .detail-group { margin-bottom: 15px; }
    .label { font-weight: 600; color: #444; display: block; margin-bottom: 5px; }
    .value { padding: 10px 12px; background-color: #f9f9f9; border: 1px solid #ccc; border-radius: 6px; color: #333; }
    .back-button {
      display: inline-block;
      margin-top: 20px;
      background-color: #653800;
      color: white;
      padding: 10px 16px;
      border-radius: 6px;
      text-decoration: none;
    }
    .back-button:hover { background-color: #4e2e00; }
  </style>
</head>
<body>

  <div class="container">
    <h2>Detail Penitipan</h2>

    <div class="detail-group">
      <span class="label">Nama</span>
      <div class="value">{{ $data->nama }}</div>
    </div>

    <div class="detail-group">
      <span class="label">Jumlah Barang</span>
      <div class="value">{{ $data->jumlah_barang }}</div>
    </div>

    <div class="detail-group">
      <span class="label">Tanggal Awal</span>
      <div class="value">{{ \Carbon\Carbon::parse($data->tanggal_awal)->format('d M Y') }}</div>
    </div>

    <div class="detail-group">
      <span class="label">Tanggal Akhir</span>
      <div class="value">{{ \Carbon\Carbon::parse($data->tanggal_akhir)->format('d M Y') }}</div>
    </div>

    <div class="detail-group">
      <span class="label">Alamat</span>
      <div class="value">{{ $data->alamat }}</div>
    </div>

    <a href="{{ route('admin.penitipan') }}" class="back-button"><i class="fa fa-arrow-left"></i> Kembali</a>
  </div>

</body>
</html>
