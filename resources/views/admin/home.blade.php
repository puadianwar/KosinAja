<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
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

    .welcome-text {
      font-size: 36px;
      color: #333;
      text-align: center;
      margin-bottom: 40px;
    }

    .stats-container {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .stat-card {
      width: 200px;
      height: 200px;
      border-radius: 12px;
      background: linear-gradient(180deg, rgba(101,56,0,1) 49%, rgba(203,113,0,1) 100%);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: white;
      transition: 0.3s;
    }

    .stat-card:hover {
      transform: translateY(-5px);
    }

    .stat-content h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .stat-number {
      font-size: 48px;
      font-weight: bold;
    }
  </style>
</head>
<body>
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

  <div class="main-content">
    <div class="top-bar">
      <a href="{{ route('logout') }}" class="logout-button">Logout</a>
    </div>

    <h1 class="welcome-text">Selamat Datang di Website KosinAja</h1>

    <div class="stats-container">
      <div class="stat-card">
        <div class="stat-content">
          <h3>Penitipan</h3>
          <p class="stat-number">20</p>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-content">
          <h3>Pelanggan</h3>
          <p class="stat-number">15</p>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-content">
          <h3>Pesanan Baru</h3>
          <p class="stat-number">10</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
