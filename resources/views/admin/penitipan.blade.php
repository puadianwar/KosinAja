<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Penitipan Barang - KosinAja</title>
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

    .btn-tambah {
      display: inline-block;
      margin-bottom: 20px;
      padding: 10px 16px;
      background-color: #28a745;
      color: white;
      font-weight: 600;
      border-radius: 6px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .btn-tambah:hover { background-color: #218838; }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th { background-color: #eee; }

    .btn-group {
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .btn {
      padding: 6px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      color: white;
    }

    .btn-edit { background-color: #ff5555; }
    .btn-delete { background-color: #e60000; }
    .btn-detail { background-color: #007bff; }

    .alert-success {
      padding: 12px;
      margin-bottom: 20px;
      border-radius: 5px;
      background-color: #d4edda;
      color: #155724;
      border: 1px solid #c3e6cb;
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
      <a href="#" class="nav-item"><i class="fa fa-box-open"></i> Packing</a>
      <a href="#" class="nav-item"><i class="fa fa-truck-moving"></i> Angkut</a>
      <a href="{{ route('admin.pelanggan') }}" class="nav-item"><i class="fa fa-users"></i> Pelanggan</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="top-bar">
      <a href="{{ route('logout') }}" class="logout-button">Logout</a>
    </div>

    <h2>Daftar Penitipan Barang</h2>

    @if(session('success'))
      <div class="alert-success">
        {{ session('success') }}
      </div>
    @endif

    <a href="{{ route('admin.tambah_penitipan') }}" class="btn-tambah"><i class="fa fa-plus"></i> Tambah Penitipan</a>

    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jumlah Barang</th>
          <th>Tanggal/Akhir</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @php $no = 1; @endphp
        @foreach ($data as $item)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jumlah_barang }}</td>
            <td>{{ \Carbon\Carbon::parse($item->tanggal_awal)->format('d/m/Y') }} - {{ \Carbon\Carbon::parse($item->tanggal_akhir)->format('d/m/Y') }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
              <div class="btn-group">
                <a href="{{ route('admin.detail_penitipan', $item->id) }}" class="btn btn-detail" title="Detail"><i class="fa fa-magnifying-glass"></i></a>
                <a href="{{ route('admin.edit_penitipan', $item->id) }}" class="btn btn-edit" title="Edit">
                  <i class="fa fa-pen"></i>
                </a>
                <form action="{{ route('admin.delet_penitipan', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-delete" title="Delete">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Penitipan Barang - KosinAja</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      margin: 0;
      display: flex;
    }

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
      margin-left: auto;
      margin-right: auto;
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

    .nav-item:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

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

    .logout-button:hover {
      background-color: #884800;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #eee;
    }

    .table-img {
      width: 60px;
      height: 60px;
      object-fit: cover;
      border-radius: 5px;
      margin-right: 5px;
    }

    .btn-group {
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .btn {
      padding: 6px 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      color: white;
    }

    .btn-edit {
      background-color: #ff5555;
    }

    .btn-delete {
      background-color: #e60000;
    }
    
    .btn-detail {
        background-color: #007bff;
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
      <a href="#" class="nav-item"><i class="fa fa-box-open"></i> Packing</a>
      <a href="#" class="nav-item"><i class="fa fa-truck-moving"></i> Angkut</a>
      <a href="{{ route('admin.pelanggan') }}" class="nav-item"><i class="fa fa-users"></i> Pelanggan</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <div class="top-bar">
      <a href="{{ route('logout') }}" class="logout-button">Logout</a>
    </div>

    <h2>Daftar Penitipan Barang</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jumlah Barang</th>
          <th>Tanggal/Akhir</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Rizdan</td>
          <td>5</td>
          <td>15/05/2025 - 10/06/2025</td>
          <td>Bukit Tinggi</td>
          <td>
            <div class="btn-group">
                <button class="btn btn-detail" title="Detail"><i class="fa fa-magnifying-glass"></i></button>
                <button class="btn btn-edit" title="Edit"><i class="fa fa-pen"></i></button>
                <button class="btn btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
            </div>
        </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Wahyu</td>
          <td>1</td>
          <td>20/05/2025 - 15/06/2025</td>
          <td>Riau</td>
          <td>
            <div class="btn-group">
                <button class="btn btn-detail" title="Detail"><i class="fa fa-magnifying-glass"></i></button>
                <button class="btn btn-edit" title="Edit"><i class="fa fa-pen"></i></button>
                <button class="btn btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
            </div>
        </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Alfi</td>
          <td>2</td>
          <td>25/05/2025 - 25/06/2025</td>
          <td>Marapalam Indah</td>
          <td>
            <div class="btn-group">
                <button class="btn btn-detail" title="Detail"><i class="fa fa-magnifying-glass"></i></button>
                <button class="btn btn-edit" title="Edit"><i class="fa fa-pen"></i></button>
                <button class="btn btn-delete" title="Delete"><i class="fa fa-trash"></i></button>
            </div>
        </td>
        </tr>
        <tr>
          <td>4</td>
          <td></td>
          <td></td>
          <td>24/06/2025 - 25/06/2025</td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>
