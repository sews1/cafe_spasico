@extends('layout.applayout')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to <span>Spasico Cafe</span></h1>
            <p class="lead">Experience the Future of Coffee Culture</p>
            <a href="#" class="btn explore-btn">Explore Menu</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5 text-center">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <p class="section-desc">
                At Spasico Cafe, we blend artistry with flavor. Our space is designed for dreamers, thinkers, and coffee
                lovers.
                Come and enjoy a futuristic café experience with a touch of modern elegance.
            </p>
            <div class="row mt-5 gy-4">
                <div class="col-md-4 col-sm-6">
                    <img src="/images/about1.jpg" class="img-fluid about-img" alt="About Quality Coffee">
                    <h5 class="mt-3">Quality Coffee</h5>
                    <p>Every cup is brewed to perfection with love and care.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="/images/about2.jpg" class="img-fluid about-img" alt="Relaxing Ambience">
                    <h5 class="mt-3">Relaxing Ambience</h5>
                    <p>A perfect space to unwind, work, or catch up with friends.</p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <img src="/images/about3.jpg" class="img-fluid about-img" alt="Friendly Service">
                    <h5 class="mt-3">Friendly Service</h5>
                    <p>Our team is here to make your visit delightful and memorable.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Menu Section -->
    <section class="menu-page py-4">
        <div class="container">
            <h1 class="section-title text-center text-white">Our Menu</h1>
            <p class="section-desc text-center text-white">Discover the perfect blend of flavors and artistry in every cup.
            </p>

            <div class="row mt-5 gy-4">
                <div class="col-md-4 col-sm-6">
                    <div class="menu-card text-center">
                        <img src="/images/menu1.jpeg" class="img-fluid rounded-3" alt="Espresso">
                        <h5 class="mt-3 text-white">Espresso</h5>
                        <p class="text-white">Rich and intense coffee experience.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="menu-card text-center">
                        <img src="/images/menu2.jpeg" class="img-fluid rounded-3" alt="Cappuccino">
                        <h5 class="mt-3 text-white">Cappuccino</h5>
                        <p class="text-white">Balanced and creamy perfection.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="menu-card text-center">
                        <img src="/images/menu3.jpg" class="img-fluid rounded-3" alt="Latte">
                        <h5 class="mt-3 text-white">Latte</h5>
                        <p class="text-white">Smooth and silky, perfect for any time.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('menu') }}" class="btn futuristic-btn text-white">
                    <i class="fas fa-utensils"></i> Explore Full Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonials" class="testimonials-section py-5">
        <div class="container">
            <h2 class="section-title text-center">What Our Customers Say</h2>
            <div class="row mt-4 g-4">
                @php
                    $testimonials = [
                        [
                            'text' => 'Tempat nyaman buat nongki2 Spasico  mix platernya enakkkkkkkkkkkk.',
                            'author' => 'Delphia Sara',
                        ],
                        ['text' => 'Tempat Nyaman & tenang, Americanonya   ok', 'author' => 'San san'],
                        ['text' => 'nyamann buat nongki2 dan belajar kelompok dll!', 'author' => 'Jeremy'],
                        [
                            'text' => 'Best coffee shop in town! The service is always top-notch.',
                            'author' => 'Alice Brown',
                        ],
                        [
                            'text' => 'Their attention to detail in every cup of coffee is truly commendable.',
                            'author' => 'Robert Wilson',
                        ],
                        [
                            'text' => 'Great atmosphere, amazing coffee, and the staff always greet you with a smile.',
                            'author' => 'Emily Davis',
                        ],
                    ];
                @endphp

                @foreach ($testimonials as $testimonial)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="testimonial-card">
                            <p>"{{ $testimonial['text'] }}"</p>
                            <footer>- {{ $testimonial['author'] }}</footer>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
