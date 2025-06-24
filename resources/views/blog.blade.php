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

.hero-container {
            position: relative;
            width: 1440px;
            height: 590px;
            overflow: hidden;
        }

        .background-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .overlay-rectangle {
            position: absolute;
            top: 115px;
            left: 306px;
            width: 828px;
            height: 360px;
            background: rgba(6, 5, 5, 0.56);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .blog-title {
            font-family: 'Roboto Flex', sans-serif;
            font-weight: 700;
            font-size: 64px;
            color: #FFFFFF;
            text-align: center;
            margin-bottom: 20px;
        }

        .blog-description {
            font-family: 'Roboto Flex', sans-serif;
            font-weight: 700;
            font-size: 24px;
            color: #FFFFFF;
            text-align: center;
            max-width: 698px;
            padding: 0 20px;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .blog-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .blog-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 48px;
            color: #5c3020;
            text-align: center;
            margin: 20px 0;
            line-height: 1.2;
        }

        .blog-image {
            width: 520px;
            height: 264px;
            object-fit: cover;
            margin: 20px 0;
        }

        .blog-button {
            background: linear-gradient(275.89deg, #5c3020 39.14%, #5c3020 201%);
            color: #ffffff;
            border: none;
            border-radius: 20px;
            padding: 10px 40px;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 700;
            font-size: 30px;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .blog-button:hover {
            opacity: 0.9;
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

    <div class="hero-container">
        <img src="{{ ('img/bck.jpg') }}" alt="Background" class="background-image">
        <div class="overlay-rectangle">
            <h1 class="blog-title">our blog</h1>
            <p class="blog-description">Temukan harga terbaik dan pilih paket yang sesuai dengan kebutuhan Anda.</p>
        </div>
    </div>
    <div class="blog-grid">
        <div class="blog-card">
            <h2 class="blog-title">Tutorial packing cepat ala kosinaja</h2>
            <img src="https://dashboard.codeparrot.ai/api/image/Z8lIgrwkNXOiaV-m/rectangl.png" alt="Packing Tutorial" class="blog-image">
            <button class="blog-button">baca</button>
        </div>
        
        <div class="blog-card">
            <h2 class="blog-title">mau pulang kampung tanpa ribet?</h2>
            <img src="https://dashboard.codeparrot.ai/api/image/Z8lIgrwkNXOiaV-m/rectangl-2.png" alt="Going Home" class="blog-image">
            <button class="blog-button">baca</button>
        </div>
        
        <div class="blog-card">
            <h2 class="blog-title">katanya ga pulang kampung bikin rindu?</h2>
            <img src="https://dashboard.codeparrot.ai/api/image/Z8lIgrwkNXOiaV-m/rectangl-3.png" alt="Missing Home" class="blog-image">
            <button class="blog-button">pilih</button>
        </div>
        
        <div class="blog-card">
            <h2 class="blog-title">7 keajaiban kos kamu harus tahu</h2>
            <img src="https://dashboard.codeparrot.ai/api/image/Z8lIgrwkNXOiaV-m/rectangl-4.png" alt="Kos Wonders" class="blog-image">
            <button class="blog-button">pilih</button>
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