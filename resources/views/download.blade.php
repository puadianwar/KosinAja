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
.container {
    position: relative;
    width: 100%;
    max-width: 1440px;
    height: 100vh; /* Menyesuaikan tinggi layar */
    margin: 0 auto;
    border-radius: 20px;
    overflow: hidden;
    background-image: url('img/bck.jpg'); /* Pastikan path gambar benar */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.content {
    max-width: 1151px;
    padding: 20px;
    background: rgba(255, 255, 255, 0.7); /* Memberi efek transparan agar teks tetap terbaca */
    border-radius: 10px;
}

.title {
    color: #5C3020;
    font-size: 48px;
    font-weight: 700;
    text-align: center;
    font-family: 'Roboto Flex', sans-serif;
}

.download-button {
    display: inline-block;
    padding: 15px 40px;
    background: linear-gradient(275.89deg, #5C3020 39.14%, #5C3020 200.99%);
    border-radius: 20px;
    color: white;
    text-decoration: none;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 700;
    font-size: 24px;
    border: none;
    cursor: pointer;
    transition: opacity 0.3s ease;
    min-width: 250px;
}

.download-button:hover {
    opacity: 0.9;
}

@media (max-width: 768px) {
    .title {
        font-size: 32px;
    }

    .download-button {
        font-size: 20px;
        padding: 12px 30px;
        min-width: 200px;
    }
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
        <div class="container">
        <div class="content">
            <h1 class="title">mau lebih tahu tentang detail layanan kosinaja? ayoo download aplikasi kami sekarang</h1>
            <button class="download-button">download</button>
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
                <a href="{{('about')}}">About</a> | 
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