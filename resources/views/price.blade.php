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

body {
    margin: 0;
    padding: 20px;
    font-family: 'Roboto Flex', sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 1328px;
    margin: 0 auto;
    padding: 20px;
}

.main-title {
    font-family: 'Poppins', sans-serif;
    font-size: 64px;
    font-weight: 700;
    color: #5c3020;
    text-align: center;
    margin-bottom: 40px;
}

.cards-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    align-items: stretch;
}

.card {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    flex: 1;
    max-width: 374px;
    min-height: 450px; /* Sesuaikan agar tinggi kartu sama */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-family: 'Poppins', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #5c3020;
    text-align: left;
    margin-top: 0;
    margin-bottom: 20px;
}

.card-content {
    font-size: 20px;
    font-weight: 500;
    flex-grow: 1;
}

.card-content ul {
    list-style-type: disc;
    padding-left: 20px;
    margin: 0;
}

.card-content li {
    margin-bottom: 10px;
}

.detail-btn {
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
    background: linear-gradient(275.89deg, #5c3020 39.14%, #5c3020 201%);
    border: none;
    border-radius: 20px;
    padding: 10px 30px;
    width: 154px;
    height: 50px;
    cursor: pointer;
    margin: auto; /* Untuk menengahkan tombol */
    transition: transform 0.2s, opacity 0.2s;
}

.detail-btn:hover {
    transform: scale(1.05);
    opacity: 0.9;
}

@media (max-width: 1200px) {
    .cards-container {
        justify-content: center;
    }
    
    .card {
        margin-bottom: 20px;
        max-width: 100%; /* Memungkinkan kartu menyesuaikan ukuran layar */
    }
}

body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1341px;
            margin: 0 auto;
            padding: 20px;
        }
        .title {
            font-size: 64px;
            color: #5c3020;
            text-align: center;
            margin-bottom: 40px;
        }
        .card-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            flex: 1;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card h2 {
            font-size: 28px;
            color: #5c3020;
            text-align: center;
            margin-bottom: 30px;
        }
        .card p {
            font-family: 'Roboto Flex', sans-serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .card button {
            background: linear-gradient(275.89deg, #5c3020 39.14%, #5c3020 201%);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 30px;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 24px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity 0.3s;
            align-self: center;
        }
        .card button:hover {
            opacity: 0.8;
        }
        
        .promo-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            font-family: 'Roboto Flex', sans-serif;
            align-items: center;
        }

        .promo-card {
            width: 857px;
            background: #ffffff;
            border-radius: 20px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .promo-title {
            font-size: 48px;
            font-weight: 700;
            color: #5c3020;
            text-align: center;
            margin-bottom: 15px;
        }

        .promo-subtitle {
            font-size: 24px;
            font-weight: 700;
            color: #000000;
            text-align: center;
            margin-bottom: 10px;
        }

        .promo-button {
            width: 154px;
            height: 50px;
            background: linear-gradient(275.89deg, #5c3020 39.14%, #5c3020 201%);
            border-radius: 20px;
            border: none;
            color: #ffffff;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 24px;
            font-weight: 700;
            cursor: pointer;
            transition: opacity 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .promo-button:hover {
            opacity: 0.9;
        }

        .terms {
            font-size: 15px;
            font-weight: 700;
            color: #000000;
            text-align: center;
            margin-bottom: 20px;
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
            <h1>Harga Paket KosinAja</h1>
            <p>Temukan harga terbaik dan pilih paket yang sesuai dengan kebutuhan Anda.</p>
        </div>
    </div>
    <div class="container">
        <h1 class="main-title">Paket Titip barang</h1>
        
        <div class="cards-container">
            <!-- Mini Package -->
            <div class="card">
                <h2 class="card-title">Paket Titip Mini</h2>
                <div class="card-content">
                    <ul>
                        <li>Penyimpanan hingga 2 minggu.</li>
                        <li>Ruang penyimpanan ukuran kecil (1m³).</li>
                        <li>Keamanan 24/7.</li>
                        <li>Bonus: Gratis pickup barang untuk jarak max 5 km.</li>
                    </ul>
                </div>
                <button class="detail-btn">detail</button>
            </div>

            <!-- Standard Package -->
            <div class="card">
                <h2 class="card-title">Paket Titip Standard</h2>
                <div class="card-content">
                    <ul>
                        <li>Penyimpanan hingga 1 bulan.</li>
                        <li>Ruang penyimpanan medium (2m³).</li>
                        <li>Fasilitas tracking barang melalui aplikasi.</li>
                        <li>Bonus: Diskon 10% untuk mahasiswa yang menitip lebih dari 1 bulan.</li>
                    </ul>
                </div>
                <button class="detail-btn">detail</button>
            </div>

            <!-- Premium Package -->
            <div class="card">
                <h2 class="card-title">Paket Titip Premium</h2>
                <div class="card-content">
                    <ul>
                        <li>Penyimpanan hingga 3 bulan.</li>
                        <li>Ruang penyimpanan besar (4m³).</li>
                        <li>Opsi asuransi untuk barang bernilai tinggi.</li>
                        <li>Bonus: Gratis bubble wrap untuk barang fragile.</li>
                    </ul>
                </div>
                <button class="detail-btn">detail</button>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="title">Paket Packing Barang</h1>
        <div class="card-container">
            <!-- Paket Mini -->
            <div class="card">
                <h2>Paket Packing Mini</h2>
                <div>
                    <p>Pengemasan barang dengan kardus biasa.</p>
                    <p>Pemberian label identifikasi.</p>
                    <p>Bonus: Gratis perlengkapan label</p>
                </div>
                <button>detail</button>
            </div>

            <!-- Paket Standar -->
            <div class="card">
                <h2>Paket Packing Standar</h2>
                <div>
                    <p>Pengemasan dengan bubble wrap, kardus tebal, dan stiker fragile.</p>
                    <p>Konsultasi pengemasan dengan tim profesional.</p>
                    <p>Bonus: Diskon 15% untuk packing lebih dari 10 barang.</p>
                </div>
                <button>detail</button>
            </div>

            <!-- Paket Premium -->
            <div class="card">
                <h2>Paket packing premium</h2>
                <div>
                    <p>Penyediaan kardus besar dan wrapping tambahan untuk barang besar</p>
                    <p>Bonus: Gratis stiker kategori untuk memudahkan unpacking.</p>
                </div>
                <button>detail</button>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="main-title">Paket Angkut Barang</h1>
        
        <div class="cards-container">
            <!-- Mini Package -->
            <div class="card">
                <h2 class="card-title">Paket Angkut Mini</h2>
                <div class="card-content">
                    <p>Layanan antar barang hingga 10 item.</p>
                    <p>Jarak max 5 km.</p>
                    <p>Bonus: Diskon 10% untuk pemesanan berikutnya.</p>
                    <p>Bonus: Diskon 10% untuk pemesanan berikutnya.</p>
                </div>
                <button class="detail-btn">detail</button>
            </div>

            <!-- Standard Package -->
            <div class="card">
                <h2 class="card-title">Paket Angkut standard</h2>
                <div class="card-content">
                    <p>Layanan antar barang hingga 20 item.</p>
                    <p>Jarak max 10 km.</p>
                    <p>Bantuan angkut oleh 2 petugas.</p>
                    <p>Bonus: Gratis bubble wrap untuk 3 barang besar.</p>
                </div>
                <button class="detail-btn">detail</button>
            </div>

            <!-- Premium Package -->
            <div class="card">
                <h2 class="card-title">Paket Angkut premium</h2>
                <div class="card-content">
                    <p>Layanan antar barang hingga 30 item.</p>
                    <p>Jarak max 15 km.</p>
                    <p>Bantuan angkut dan pengaturan barang di kos baru.</p>
                    <p>Bonus: Gratis layanan packing untuk 5 barang.</p>
                </div>
                <button class="detail-btn">detail</button>
            </div>
        </div>
    </div>
    <div class="promo-container">
        <!-- First Promo Card -->
        <div class="promo-card">
            <h1 class="promo-title">Diskon 10% untuk Paket Premium!</h1>
            <p class="promo-subtitle">Gunakan kode promo KOSIN10 saat checkout.</p>
            <button class="promo-button">gunakan</button>
        </div>

        <!-- Second Promo Card -->
        <div class="promo-card">
            <h1 class="promo-title">Promo akhir tahun</h1>
            <p class="promo-subtitle">karena tahun 2024 jadi diskon 24%</p>
            <p class="terms">syarat dan ketentuan berlaku*</p>
            <button class="promo-button">gunakan</button>
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