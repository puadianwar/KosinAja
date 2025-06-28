<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>History</title>
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

    .history-header {
      margin-bottom: 30px;
    }

    .history-title {
      font-size: 32px;
      color: #333;
      margin-bottom: 5px;
    }

    .divider {
      width: 60px;
      height: 4px;
      background-color: #653800;
      border-radius: 2px;
    }

    .history-item {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: box-shadow 0.3s;
    }

    .history-item:hover {
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .title {
      font-size: 18px;
      font-weight: 600;
      color: #333;
      text-transform: capitalize;
      margin: 0;
    }

    .date {
      font-size: 14px;
      color: #777;
      margin-top: 5px;
    }

    .check-button {
      background-color: #653800;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-weight: 500;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .check-button:hover {
      background-color: #4e2d00;
    }

    .status-text {
      font-size: 14px;
      font-weight: 600;
      color: red;
      margin-top: 10px;
    }

    .btn-status {
      display: inline-block;
      padding: 4px 10px;
      border-radius: 12px;
      font-size: 12px;
      font-weight: bold;
      color: white;
      margin-top: 8px;
    }

    .btn-status.red {
      background-color: red;
    }

    .btn-status.green {
      background-color: green;
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
    <!-- Logout Button -->
    <div class="top-bar">
      <a href="{{ route('logout') }}" class="logout-button">Logout</a>
    </div>

    <!-- Header -->
    <div class="history-header">
      <h1 class="history-title">Riwayat Pemesanan</h1>
      <div class="divider"></div>
    </div>

    <!-- History Items -->
    <div class="history-item">
      <div class="content">
        <h2 class="title">Pemesanan jasa titip barang selesai</h2>
        <p class="date">22 Maret 2025</p>
        <span class="btn-status red">Belum Diperiksa</span>
      </div>
      <button class="check-button">Periksa</button>
    </div>

    <div class="history-item">
      <div class="content">
        <h2 class="title">Pemesanan jasa angkut selesai</h2>
        <p class="date">30 Januari 2025</p>
        <span class="btn-status red">Belum Diperiksa</span>
      </div>
      <button class="check-button">Periksa</button>
    </div>

    <div class="history-item">
      <div class="content">
        <h2 class="title">Pemesanan jasa titip barang selesai</h2>
        <p class="date">21 Januari 2025</p>
        <span class="btn-status red">Belum Diperiksa</span>
      </div>
      <button class="check-button">Periksa</button>
    </div>

    <div class="history-item">
      <div class="content">
        <h2 class="title">Pemesanan jasa angkut selesai</h2>
        <p class="date">10 Januari 2025</p>
        <span class="btn-status green">Sudah Diperiksa</span>
      </div>
      <button class="check-button">Periksa</button>
    </div>

    <div class="history-item">
      <div class="content">
        <h2 class="title">Pemesanan jasa titip barang selesai</h2>
        <p class="date">5 Januari 2025</p>
        <span class="btn-status green">Sudah Diperiksa</span>
      </div>
      <button class="check-button">Periksa</button>
    </div>
  </div>
</body>
</html>
