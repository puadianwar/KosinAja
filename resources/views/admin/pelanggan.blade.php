<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Data Pelanggan - Kosinaja</title>
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
      background-color: #f9f9f9;
    }

    .sidebar {
      width: 220px;
      background-color: #653800;
      height: 100vh;
      padding: 20px 10px;
      color: white;
      border-top-right-radius: 30px;
    }

    .sidebar .logo {
      display: block;
      margin: 0 auto 20px auto;
      width: 120px;
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
      padding: 10px;
      border-radius: 10px;
    }

    .nav-item:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .main-content {
      flex-grow: 1;
      padding: 30px;
    }

    .top-bar {
      display: flex;
      justify-content: flex-end;
      margin-bottom: 20px;
    }

    .logout-button {
      padding: 8px 16px;
      background-color: #a65b00;
      color: white;
      border: none;
      border-radius: 5px;
      font-weight: 500;
      text-decoration: none;
    }

    .logout-button:hover {
      background-color: #884800;
    }

    .search-bar {
      width: 100%;
      padding: 12px 20px;
      border-radius: 10px;
      border: none;
      background-color: #eee;
      font-size: 14px;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
    }

    thead {
      background-color: #8d6236;
      color: white;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .action-buttons {
      display: flex;
      gap: 8px;
    }

    .action-buttons button {
      border: none;
      background-color: #e5e5e5;
      padding: 6px 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .user-img {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      object-fit: cover;
      vertical-align: middle;
      margin-right: 10px;
    }

    .checkbox {
      text-align: center;
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

    <input type="text" class="search-bar" placeholder="🔍 search" />

    <table>
      <thead>
        <tr>
          <th class="checkbox"><input type="checkbox" /></th>
          <th>Nama</th>
          <th>Email</th>
          <th>Instansi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="checkbox"><input type="checkbox" /></td>
          <td><img src="https://cdn-icons-png.flaticon.com/512/236/236831.png" class="user-img" alt="User"> Marvin</td>
          <td>Marvin@gmail.com</td>
          <td>-</td>
          <td>
            <div class="action-buttons">
              <button title="Edit"><i class="fa fa-pen"></i></button>
              <button title="Send Email"><i class="fa fa-envelope"></i></button>
            </div>
          </td>
        </tr>
        <tr>
          <td class="checkbox"><input type="checkbox" /></td>
          <td><img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png" class="user-img" alt="User"> Ramdan</td>
          <td>Ramdan7899@gmail.com</td>
          <td>-</td>
          <td>
            <div class="action-buttons">
              <button title="Edit"><i class="fa fa-pen"></i></button>
              <button title="Send Email"><i class="fa fa-envelope"></i></button>
            </div>
          </td>
        </tr>
        <tr>
          <td class="checkbox"><input type="checkbox" /></td>
          <td><img src="https://cdn-icons-png.flaticon.com/512/921/921094.png" class="user-img" alt="User"> Irfan</td>
          <td>Irfan7788@gmail.com</td>
          <td>-</td>
          <td>
            <div class="action-buttons">
              <button title="Edit"><i class="fa fa-pen"></i></button>
              <button title="Send Email"><i class="fa fa-envelope"></i></button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
