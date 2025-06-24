<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <style>
.navbar {
    width: 100%;
    background-color: #ffffff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.nav-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    max-width: 1462px;
    margin: 0 auto;
}

.logo {
    padding: 5px 0;
}

.nav-links {
    display: flex;
    gap: 40px;
}

.nav-link {
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 300;
    font-size: 30px;
    color: #484444;
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #653800;
}

.download-btn button {
    width: 154px;
    height: 50px;
    background: linear-gradient(275.89deg, rgba(101,56,0,1) 39.14%, rgba(92,48,32,1) 201%);
    border-radius: 20px;
    border: none;
    color: #ffffff;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 700;
    font-size: 30px;
    cursor: pointer;
    transition: transform 0.2s ease;
}

.download-btn button:hover {
    transform: scale(1.05);
}

.download-btn button:active {
    transform: scale(0.95);
}


body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

.background-container {
    width: 100%;
    height: 100vh;
    background-image: url('img/foto4.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
}

.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 20px;
    border-radius: 10px;
}

.content h1 {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 20px;
}

.content p {
    font-size: 24px;
}

.container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            font-family: 'Poppins', sans-serif;
        }

        .main-title {
            text-align: center;
            color: #653800;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 60px;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 60px;
        }

        .benefit-item {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: center;
        }

        .benefit-content {
            padding: 20px;
        }

        .benefit-title {
            color: #653800;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .benefit-text {
            color: #333;
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .benefit-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .benefit-list li {
            margin-bottom: 10px;
            font-size: 18px;
            color: #333;
        }

        .benefit-list li::before {
            content: "-";
            margin-right: 8px;
        }

        .benefit-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        /* Alternate layout for middle section */
        .benefit-item:nth-child(2) {
            grid-template-columns: 1fr 1fr;
        }

        .benefit-item:nth-child(2) .benefit-content {
            text-align: right;
            grid-column: 2;
            grid-row: 1;
        }

        .benefit-item:nth-child(2) img {
            grid-column: 1;
            grid-row: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .main-title {
            color: #653800;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 60px;
            text-shadow: 2px 2px 0px #000000;
        }

        .features-grid {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .feature-item {
            background-color: #653800;
            color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .feature-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .feature-text {
            font-size: 16px;
            line-height: 1.5;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .main-title {
            color: #653800;
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 60px;
            text-shadow: 2px 2px 0px #000000;
        }

        .team-grid {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .team-member {
            background-color: #653800;
            color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .member-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
        }

        .member-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .member-role {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 15px;
        }

        .member-description {
            font-size: 16px;
            line-height: 1.5;
        }

        body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

.footer {
    background-color: #653800;
    color: #ffffff;
    padding: 40px 0;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.footer-left {
    flex: 1;
}

.logo {
    width: 150px;
    margin-bottom: 15px;
}

.footer-left h2 {
    margin: 0 0 15px 0;
    font-size: 32px;
}

.footer-left h2 span {
    color: #FFA500;
}

.footer-nav {
    margin: 15px 0;
}

.footer-nav a {
    color: #ffffff;
    text-decoration: none;
    margin: 0 5px;
}

.copyright {
    font-size: 14px;
    color: #cccccc;
}

.footer-middle {
    flex: 1;
    padding: 0 40px;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
}

.contact-item i {
    margin-right: 10px;
    margin-top: 5px;
}

.contact-text {
    margin: 0;
}

.contact-text p {
    margin: 0;
}

.email {
    color: #FFA500;
}

.footer-right {
    flex: 1;
}

.footer-right h3 {
    margin: 0 0 15px 0;
    font-size: 24px;
}

.footer-right p {
    margin: 0 0 20px 0;
    line-height: 1.5;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-icon {
    background-color: #444444;
    color: #ffffff;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.social-icon:hover {
    background-color: #FFA500;
}

@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        gap: 30px;
    }
    
    .footer-middle {
        padding: 0;
    }
}
    </style>
</head>
<body>
    <div class="nav-container">
        <div class="logo">
            <img src="{{ ('img/logo.png') }}" alt="Logo" style="width: 200px; height: 80px;">
        </div>
        <div class="nav-links">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Price</a>
            <a href="#" class="nav-link">about us</a>
            <a href="#" class="nav-link">Blog</a>
        </div>
        <div class="download-btn">
            <button>download</button>
        </div>
        </div>

        <div class="background-container">
        <div class="content">
            <h1>Tentang KosinAja</h1>
            <p>KosinAja hadir sebagai solusi layanan jasa titip barang yang aman, praktis, dan terpercaya untuk memudahkan kebutuhan Anda.</p>
        </div>
    </div>

    <div class="container">
        <h1 class="main-title">Kenapa Memilih kosinaja</h1>
        
        <div class="benefits-grid">
            <div class="benefit-item">
                <div class="benefit-content">
                    <h2 class="benefit-title">Layanan Lengkap untuk Mahasiswa</h2>
                    <p class="benefit-text">Kami memahami kebutuhan mahasiswa, terutama yang tinggal di kos. Oleh karena itu, Kosinaja menyediakan:</p>
                    <ul class="benefit-list">
                        <li>Jasa Titip Barang</li>
                        <li>Antar Jemput Pindahan Kos</li>
                        <li>Layanan Packing Profesional</li>
                    </ul>
                </div>
                <img src="{{ ('img/foto2.jpg') }}" alt="Student Service" class="benefit-image">
            </div>

            <div class="benefit-item">
                <div class="benefit-content">
                <h2 class="benefit-title">Aman dan Terpercaya</h2>
                    <p class="benefit-text">Sistem keamanan berlapis untuk memastikan barang Anda sampai dengan selamat.</p>
                    <p class="benefit-text">Mitra kami terlatih untuk menangani barang dengan hati-hati.</p>
                </div>
                <img src="{{ ('img/foto5.jpg') }}" alt="Security" class="benefit-image">
            </div>

            <div class="benefit-item">
                <div class="benefit-content">
                    <h2 class="benefit-title">Praktis dan Hemat Waktu</h2>
                    <p class="benefit-text">Kosinaja dirancang untuk mahasiswa yang ingin semuanya serba mudah!</p>
                    <p class="benefit-text">Tidak perlu ribet mencari transportasi atau repot mengemas barang.</p>
                    <p class="benefit-text">Cukup pesan melalui aplikasi atau kontak langsung, semua kebutuhan Anda akan beres!</p>
                </div>
                <img src="{{ ('img/foto6.jpg') }}" alt="Convenience" class="benefit-image">
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="main-title">Kelebihan Kosinaja</h1>
        
        <div class="features-grid">
            <div class="feature-item">
            <img src="{{ ('img/foto7.png') }}" alt="Convenience" class="benefit-image">
                <h2 class="feature-title">Pengiriman Cepat</h2>
                <p class="feature-text">Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
            </div>

            <div class="feature-item">
            <img src="{{ ('img/foto8.png') }}" alt="Convenience" class="benefit-image">
                <h2 class="feature-title">Keamanan Terjamin</h2>
                <p class="feature-text">Dengan berbagai pilihan pengiriman, barang Anda sampai lebih cepat dan aman.</p>
            </div>

            <div class="feature-item">
                <<img src="{{ ('img/foto9.png') }}" alt="Convenience" class="benefit-image">
                <h2 class="feature-title">Layanan Fleksibel</h2>
                <p class="feature-text">Kami menyediakan dukungan pelanggan yang siap membantu Anda 24/7 untuk segala keperluan.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="main-title">Our Team</h1>
        
        <div class="team-grid">
            <div class="team-member">
                <img src="{{ ('img/team.jpg') }}" alt="Team Member" class="member-photo">
                <h2 class="member-title">Pengiriman Cepat</h2>
                <p class="member-role">ceo</p>
                <p class="member-description">Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
            </div>

            <div class="team-member">
                <img src="{{ ('img/team.jpg') }}" alt="Team Member" class="member-photo">
                <h2 class="member-title">Pengiriman Cepat</h2>
                <p class="member-role">coo</p>
                <p class="member-description">Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
            </div>

            <div class="team-member">
                <img src="{{ ('img/team.jpg') }}" alt="Team Member" class="member-photo">
                <h2 class="member-title">Pengiriman Cepat</h2>
                <p class="member-role">cto</p>
                <p class="member-description">Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
            </div>

            <div class="team-member">
                <img src="{{ ('img/team.jpg') }}" alt="Team Member" class="member-photo">
                <h2 class="member-title">Pengiriman Cepat</h2>
                <p class="member-role">cmo</p>
                <p class="member-description">Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
            </div>
        </div>
    </div>

    <footer class="footer">
    <div class="footer-container">
        <!-- Kiri: Logo dan Menu -->
        <div class="footer-left">
            <img src="img/logo.png" alt="KosinAja Logo" class="logo">
            <h2 class="footer-title">About<span class="highlight">KosinAja</span></h2>
            <nav class="footer-nav">
                <a href="#">Home</a> | 
                <a href="#">Price</a> | 
                <a href="#">About</a> | 
                <a href="#">Blog</a>
            </nav>
            <p class="copyright">© 2024 KosinAja, InaTechno.</p>
        </div>

        <!-- Tengah: Kontak -->
        <div class="footer-middle">
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="contact-text">
                        <p>Padang timur, Marapalam indah V</p>
                        <p><strong>No 12, Inatechno</strong></p>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <p class="phone"><strong>+62 0821-6945-2019</strong></p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <p class="email">kosinajaofficial@gmail.com</p>
                </div>
            </div>
        </div>

        <!-- Kanan: Tentang Perusahaan & Sosial Media -->
        <div class="footer-right">
            <h3 class="about-title">About the company</h3>
            <p class="about-text">Kami menyediakan jasa titip barang, jasa angkut barang, dan jasa packing barang khusus untuk anak kos.</p>
            <div class="social-links">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
    </nav>
</body>
</html>