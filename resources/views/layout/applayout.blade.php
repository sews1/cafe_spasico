<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spasico Cafe</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--icon --->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.jpg') }}" alt="Cafe Spasico Logo" class="logo me-2">
                <span class="brand-name">Spasico Cafe</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                <a href="{{ route('login') }}" class="btn btn-login ms-3">Login</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main data-aos="fade-up">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="contact" class="footer py-4">
        <div class="container">
            <div class="row gy-4">
                <!-- Contact Information -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5 class="footer-title"><i class="fas fa-coffee me-2"></i>Spasico Cafe</h5>
                    <p class="footer-text">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        <span class="d-block">Ruko Diponegoro, Jl. Diponegoro No.A2,</span>
                        <span class="d-block">Dusun III, Madegondo, Kec. Grogol,</span>
                        <span class="d-block">Kabupaten Sukoharjo, Jawa Tengah 57552</span>
                    </p>
                    <p class="footer-text">
                        <i class="fas fa-phone me-2"></i>
                        <a href="tel:08991066262" class="text-white">08991066262</a>
                    </p>
                </div>
    
                <!-- Navigation Links -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5 class="footer-title"><i class="fas fa-link me-2"></i>Quick Links</h5>
                    <ul class="footer-text list-unstyled">
                        <li class="mb-2"><a href="/about"><i class="fas fa-info-circle me-2"></i>About Us</a></li>
                        <li class="mb-2"><a href="/menu"><i class="fas fa-utensils me-2"></i>Our Menu</a></li>
                        <li class="mb-2"><a href="/testimonials"><i class="fas fa-comments me-2"></i>Testimonials</a></li>
                        <li><a href="/contact"><i class="fas fa-envelope me-2"></i>Contact Us</a></li>
                    </ul>
                </div>
    
                <!-- Google Maps -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5 class="footer-title"><i class="fas fa-map me-2"></i>Find Us</h5>
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7288135371255!2d110.8140776735771!3d-7.604462275159373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17f1b5a2cc73%3A0x1b2af3981ea2707b!2sSPASICO%20Cafe%20%26%20Meetings!5e0!3m2!1sid!2sid!4v1735272597908!5m2!1sid!2sid" 
                        width="100%" 
                        height="200" 
                        frameborder="0" 
                        style="border:0; border-radius:10px;" 
                        allowfullscreen="">
                    </iframe>
                </div>
    
                <!-- Instagram -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <h5 class="footer-title"><i class="fab fa-instagram me-2"></i>Instagram</h5>
                    <div class="footer-instagram">
                        <a href="https://instagram.com/spasico_cafe" target="_blank" class="instagram-item">
                            <img src="{{ asset('images/all-menu.jpg') }}" alt="Instagram Post 1">
                            <div class="overlay"><i class="fab fa-instagram"></i></div>
                        </a>
                        <a href="https://instagram.com/spasico_cafe" target="_blank" class="instagram-item">
                            <img src="{{ asset('images/cafe.jpg') }}" alt="Instagram Post 2">
                            <div class="overlay"><i class="fab fa-instagram"></i></div>
                        </a>
                        <a href="https://instagram.com/spasico_cafe" target="_blank" class="instagram-item">
                            <img src="{{ asset('images/about3.jpg') }}" alt="Instagram Post 3">
                            <div class="overlay"><i class="fab fa-instagram"></i></div>
                        </a>
                        <a href="https://instagram.com/spasico_cafe" target="_blank" class="instagram-item">
                            <img src="{{ asset('images/about2.jpg') }}" alt="Instagram Post 4">
                            <div class="overlay"><i class="fab fa-instagram"></i></div>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="text-center mt-4">
                <p class="footer-text">&copy; 2024 Spasico Cafe. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
        
        // Sticky Navbar
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.custom-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('sticky');
            } else {
                navbar.classList.remove('sticky');
            }
        });
    </script>
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
