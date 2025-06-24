<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: #653800;
            padding: 15px;
        }
        .logo {
            margin-bottom: 30px;
            padding-top: 15px;
        }
        .nav-menu {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-top: 30px;
        }
        .nav-item {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            gap: 10px;
            padding: 8px;
            transition: 0.3s;
        }
        .nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
        .main-content {
            flex: 1;
            padding: 15px;
            background: white;
            margin-left: 50px;
        }
        .top-bar {
            height: 40px;
            background: #653800;
            position: fixed;
            top: 0;
            right: 0;
            left: 250px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-right: 15px;
        }
        .user-profile img {
            border-radius: 50%;
            margin-top: 40px;
        }
        .welcome-text {
            font-family: 'Jomhuria', sans-serif;
            font-size: 50px;
            color: #141111;
            text-align: center;
            margin: 150px 0 40px;
        }
        .stats-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 15px;
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
            transition: 0.3s;
        }
        .stat-card:hover {
            transform: translateY(-3px);
        }
        .stat-content {
            text-align: center;
            color: white;
        }
        .stat-content h3 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .stat-number {
            font-size: 80px;
            font-weight: 700;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="https://dashboard.codeparrot.ai/api/image/Z80nLNG_8Dy7NbDW/image.png" alt="Logo" style="width: 200px; height: 70px;">
            </div>
            <nav class="nav-menu">
                <a href="{{ route('admin.home') }}" class="nav-item active">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z80nLNG_8Dy7NbDW/icon-hom.png" alt="Home" style="width: 40px; height: 40px;">
                    <span>Dashboard</span>
                </a>
                <a href="#" class="nav-item">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z80nLNG_8Dy7NbDW/icon-msg.png" alt="Messages" style="width: 40px; height: 40px;">
                    <span>Messages</span>
                </a>
                <a href="{{ route('admin.history') }}" class="nav-item">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z80nLNG_8Dy7NbDW/icon-his.png" alt="History" style="width: 40px; height: 40px;">
                    <span>History</span>
                </a>
            </nav>
        </div>
        <div class="main-content">
            <div class="top-bar">
                <a href="{{ route('logout') }}" class="logout-button" style="margin-left: 20px; color: white; text-decoration: none; background: radial; padding: 8px 12px; border-radius: 5px;">Logout</a>
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
    </div>
</body>
</html>
