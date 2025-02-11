<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Digital</title>
    <link rel="stylesheet" href="{{ url('/') }}/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="header">
        <nav>
            <div class="logo">Undangan Digital</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Fitur</a></li>
                <li><a href="#pricing">Harga</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Undangan Digital</h1>
            <p>Cara terbaik untuk membuat undangan yang elegan dan modern.</p>
            <a href="#contact" class="cta-button">Pesan Sekarang</a>
        </div>
        <div class="hero-image">
            <img src="assets/hero-image.png" alt="Hero Image">
        </div>
    </section>

    <section id="features" class="features">
        <h2>Fitur Kami</h2>
        <div class="feature-cards">
            <div class="feature-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Responsif</h3>
                <p>Dapat diakses dari berbagai perangkat.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-palette"></i>
                <h3>Desain Menarik</h3>
                <p>Template undangan yang elegan dan modern.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-share-alt"></i>
                <h3>Mudah Dibagikan</h3>
                <p>Bagikan undangan Anda dengan mudah.</p>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing">
        <h2>Pilihan Paket</h2>
        <div class="pricing-cards">
            <div class="pricing-card">
                <h3>Basic</h3>
                <p>Rp 100.000</p>
                <ul>
                    <li>Template dasar</li>
                    <li>10 undangan</li>
                    <li>Dukungan email</li>
                </ul>
                <a href="#contact" class="cta-button">Pesan Sekarang</a>
            </div>
            <div class="pricing-card">
                <h3>Premium</h3>
                <p>Rp 200.000</p>
                <ul>
                    <li>Template premium</li>
                    <li>50 undangan</li>
                    <li>Dukungan telepon</li>
                </ul>
                <a href="#contact" class="cta-button">Pesan Sekarang</a>
            </div>
            <div class="pricing-card">
                <h3>Pro</h3>
                <p>Rp 300.000</p>
                <ul>
                    <li>Template eksklusif</li>
                    <li>100 undangan</li>
                    <li>Dukungan 24/7</li>
                </ul>
                <a href="#contact" class="cta-button">Pesan Sekarang</a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Hubungi Kami</h2>
        <form action="#" method="post">
            <input type="text" name="name" placeholder="Nama" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" placeholder="Pesan" required></textarea>
            <button type="submit" class="cta-button">Kirim</button>
        </form>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Undangan Digital. All rights reserved.</p>
    </footer>
</body>
</html>
