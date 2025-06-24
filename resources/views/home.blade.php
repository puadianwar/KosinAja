<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="navbar.css">
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


body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

.services-section {
    text-align: center;
    padding: 50px 20px;
    background-color: #ffffff;
}

.services-section h2 {
    font-size: 36px;
    font-weight: 700;
    color: #653800;
    margin-bottom: 40px;
}

.services-container {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.service-card {
    background-color: #653800;
    color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.service-icon {
    width: 100px;
    height: auto;
    margin-bottom: 20px;
}

.service-card h3 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 10px;
}

.service-card p {
    font-size: 16px;
    font-weight: 400;
}

body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

.testimonials-section {
    background-color: #653800;
    padding: 50px 20px;
    text-align: center;
}

.testimonials-section h2 {
    color: #ffffff;
    font-size: 48px;
    margin-bottom: 40px;
}

.testimonials-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    flex-wrap: wrap;
}

.testimonial-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px;
    width: 250px;
    text-align: center;
}

.profile-img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 15px;
    object-fit: cover;
}

.testimonial-card h3 {
    color: #000000;
    font-size: 18px;
    margin: 10px 0;
    font-weight: 700;
}

.testimonial-card p {
    color: #666666;
    font-size: 14px;
    line-height: 1.5;
    margin: 0;
    font-style: italic;
}

@media (max-width: 1200px) {
    .testimonials-container {
        padding: 0 20px;
    }
    
    .testimonial-card {
        width: calc(50% - 40px);
        min-width: 250px;
    }
}

@media (max-width: 768px) {
    .testimonial-card {
        width: 100%;
        max-width: 400px;
    }
}

body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

.projects-section {
    background-color: #ffffff;
    padding: 50px 20px;
    text-align: center;
}

.projects-section h2 {
    color: #653800;
    font-size: 48px;
    margin-bottom: 40px;
}

.projects-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.project-card {
    display: flex;
    background-color: #653800;
    border-radius: 10px;
    overflow: hidden;
    color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.project-img {
    width: 150px;
    height: 150px;
    object-fit: cover;
}

.project-content {
    padding: 20px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.project-content h3 {
    font-size: 24px;
    font-weight: 700;
    margin: 0 0 10px 0;
}

.project-content p {
    font-size: 16px;
    font-weight: 400;
    margin: 0 0 10px 0;
}

.project-date {
    font-size: 14px;
    font-weight: 400;
    text-align: right;
    color: #ffffff;
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

.btn-getstarted {
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 700;
    font-size: 20px;
    color: #ffffff;
    background-color: #653800;
    padding: 10px 20px;
    border-radius: 20px;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-getstarted:hover {
    background-color: #532a00;
    transform: scale(1.05);
}

.btn-getstarted:active {
    transform: scale(0.95);
}

   </style>
</head>
<body>
    <nav class="navbar">
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
            <div class="login-btn">
                <a href="{{ route('auth.login') }}" class="btn-getstarted" onclick="openLoginModal()">Log in</a>
            </div>
        </div>
        
        <div class="background-container">
            
        <div class="content">
            <h1>Titip Barang Jadi Lebih Mudah, Praktis, dan Terpercaya</h1>
            <p>Dengan KosinAja, Anda bisa menitip barang dari mana saja tanpa repot!</p>
        </div>
    </div>
        
        <section class="services-section">
            <h2>Layanan Kosinaja</h2>
            <div class="services-container">
                <div class="service-card">
                    <img src="{{ ('img/house.png') }}" alt="Service 100" class="service-icon">
                    <h3>Jasa Titip Barang</h3>
                    <p>Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
                </div>
                <div class="service-card">
                    <img src="{{ ('img/truck.png') }}" alt="Service 2" class="service-icon">
                    <h3>jasa angkut</h3>
                    <p>Kami menyediakan layanan titip barang yang mudah dan terpercaya untuk berbagai kebutuhan belanja online.</p>
                </div>
                <div class="service-card">
                    <img src="{{ ('img/box.png') }}" alt="Service 3" class="service-icon">
                    <h3>Jasa Packing</h3>
                    <p>Kami menyediakan dukungan pelanggan yang siap membantu Anda 24/7 untuk segala keperluan.</p>
                </div>
            </div>
        </section>

        <section class="testimonials-section">
        <h2>Testimoni Pelanggan</h2>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <img src="{{ ('img/bussiness-man.png') }}" alt="Budiono" class="profile-img">
                <h3>budiono siregar,medan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in httis ligula consectetur, ulter Pellentesque commodo lacus at sodales sodales. Quisque.</p>
            </div>
            
            <div class="testimonial-card">
                <img src="{{ ('img/girl.png') }}" alt="Kapella" class="profile-img">
                <h3>kapella mewing,palembang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in httis ligula consectetur, ulter Pellentesque commodo lacus at sodales sodales. Quisque.</p>
            </div>
            
            <div class="testimonial-card">
                <img src="{{ ('img/girl1.png') }}" alt="Kelly" class="profile-img">
                <h3>kelly pop ice,lampung</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in httis ligula consectetur, ulter Pellentesque commodo lacus at sodales sodales. Quisque.</p>
            </div>
            
            <div class="testimonial-card">
                <img src="{{ ('img/man.png') }}" alt="Alok" class="profile-img">
                <h3>alok bakso,padang</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in httis ligula consectetur, ulter Pellentesque commodo lacus at sodales sodales. Quisque.</p>
            </div>
        </div>
    </section>

    <section class="projects-section">
        <h2>Our Latest Project</h2>
        <div class="projects-container">
            <div class="project-card">
                <img src="{{ ('img/foto1.jpg') }}" alt="Project 1" class="project-img">
                <div class="project-content">
                    <h3>Beberish ala kosinaja</h3>
                    <p>kami akan memberikan cara gimana cara beberishan anak kosan yang baik dan juga gimana cara membuat barang rapi.</p>
                    <span class="project-date">09 des 2024</span>
                </div>
            </div>
            
            <div class="project-card">
                <img src="{{ ('img/foto2.jpg') }}" alt="Project 2" class="project-img">
                <div class="project-content">
                    <h3>Kosinaja Campus Move-In Fest 2024</h3>
                    <p>kami akan memberikan bantuan gimana cara pindah kos agar tidak ribet dengan barang barang yang keliatan berantakan dan gimana cara memesan layanan jasa angkut barang dikosinaja.</p>
                    <span class="project-date">15 des 2024</span>
                </div>
            </div>
            
            <div class="project-card">
                <img src="{{ ('img/foto3.jpg') }}" alt="Project 3" class="project-img">
                <div class="project-content">
                    <h3>Kosinaja Packing Fest</h3>
                    <p>kami akan memberikan tutorial cara packing yang benar untuk mahasiswa agar waktu mudik dia tidak susah beberishan kos/kontrakannya.</p>
                    <span class="project-date">27 des 2024</span>
                </div>
            </div>
        </div>
    </section>

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
