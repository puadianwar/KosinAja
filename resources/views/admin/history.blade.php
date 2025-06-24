<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <style>
/* Reset Default Styles */
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    display: flex;
    height: 100vh;
}

/* Container */
.container {
    display: flex;
    width: 100%;
}

/* Sidebar */
.sidebar {
    width: 280px;
    background: linear-gradient(to bottom, #8B4513, #654321);
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px 0;
    height: 100vh;
    box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.2);
}

/* Logo */
.logo img {
    width: 200px;
    height: 70px;
    margin-bottom: 30px;
}

/* Navigation Menu */
.nav-menu {
    display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
}

.nav-item {
    display: flex;
    align-items: center;
    padding: 12px 20px;
    text-decoration: none;
    color: #ffffff;
    font-size: 18px;
    font-weight: 500;
    transition: background 0.3s;
    width: 90%;
    border-radius: 8px;
}

.nav-item img {
    width: 40px;
    height: 40px;
    margin-right: 15px;
}

.nav-item:hover, .nav-item.active {
    background: rgba(255, 255, 255, 0.2);
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 220px;
    }

    .nav-item {
        font-size: 16px;
    }
}

        .nav-icon {
            width: 50px;
            height: 50px;
            margin-right: 16px;
        }

        .nav-text {
            color: #ffffff;
            font-size: 24px;
            font-weight: 400;
            text-decoration: none;
            -webkit-text-stroke: 1px #000000;
        }

        .nav-arrow {
            width: 50.55px;
            height: 40.69px;
            position: absolute;
            right: 0;
            cursor: pointer;
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .nav-arrow:hover {
            opacity: 1;
        }

        .content-section {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .history-header {
            min-width: 200px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .history-title {
            font-family: 'Jomhuria', sans-serif;
            font-size: 48px;
            font-weight: 400;
            color: #000000;
            margin-bottom: 10px;
            text-align: center;
        }

        .divider {
            width: 100%;
            max-width: 1153px;
            height: 5px;
            background-color: #d9d9d9;
        }

        .history-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin: 10px 0;
            min-width: 930px;
            background-color: #e0e0e0;
            border-radius: 10px;
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 24px;
            color: #000000;
            margin: 0;
        }

        .date {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 18px;
            color: #000000;
            margin: 0;
        }

        .check-button {
            background-color: #5d5959;
            color: #ffffff;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
            min-width: 117px;
            height: 39px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .check-button:hover {
            background-color: #4a4747;
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
    <div class="content-section">
        <div class="history-header">
            <h1 class="history-title">History</h1>
            <div class="divider"></div>
        </div>
        <div class="history-item">
            <div class="content">
                <h2 class="title">Pemesanan jasa titip barang selesai</h2>
                <p class="date">22 Maret 2025</p>
            </div>
            <button class="check-button">Periksa</button>
        </div>

        <div class="history-item">
            <div class="content">
                <h2 class="title">pemesanan jasa angkut selesai</h2>
                <p class="date">30 januari 2025</p>
            </div>
            <button class="check-button">periksa</button>
        </div>

        <div class="history-item">
            <div class="content">
                <h2 class="title">pemesanan jasa titip barang selesai</h2>
                <p class="date">21 januari 2025</p>
            </div>
            <button class="check-button">periksa</button>
        </div>

        <div class="history-item">
            <div class="content">
                <h2 class="title">pemesanan jasa angkut selesai</h2>
                <p class="date">10 januari 2025</p>
            </div>
            <button class="check-button">periksa</button>
        </div>

        <div class="history-item">
            <div class="content">
                <h2 class="title">pemesanan jasa titip barang selesai</h2>
                <p class="date">22 maret 2025</p>
            </div>
            <button class="check-button">periksa</button>
        </div>
    </div>
</body>
</html>