@extends('layout.applayout')

@section('content')
    <!-- Hero Section -->
   <section class="hero fade-in text-center">
    <div class="hero-content">
        <h1>Welcome to <span>Cafe Spasico</span></h1>
        <p class="lead">Experience the Future of Coffee Culture</p>
        <button class="btn btn-lg explore-btn">Explore Menu</button>
    </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5 text-center">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <p class="section-desc">
                At Cafe Spasico, we blend artistry with flavor. Our space is designed for dreamers, thinkers, and coffee lovers.
                Come and enjoy a futuristic café experience with a touch of modern elegance.
            </p>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="/images/about1.jpg" class="img-fluid about-img" alt="About 1">
                    <h5 class="mt-3">Quality Coffee</h5>
                </div>
                <div class="col-md-4">
                    <img src="/images/about.jpg" class="img-fluid about-img" alt="About 2">
                    <h5 class="mt-3">Relaxing Ambience</h5>
                </div>
                <div class="col-md-4">
                    <img src="/images/about3.jpg" class="img-fluid about-img" alt="About 3">
                    <h5 class="mt-3">Friendly Service</h5>
                </div>
            </div>
        </div>
    </section>
    
    

    <!-- Menu Section -->
    <section class="menu-page py-5">
        <div class="container">
            <h1 class="section-title text-center">Our Menu</h1>
            <p class="section-desc text-center">Discover the perfect blend of flavors and artistry in every cup.</p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="menu-card text-center">
                        <img src="/images/menu1.jpeg" class="img-fluid rounded-3" alt="Espresso">
                        <h5 class="mt-3">Espresso</h5>
                        <p>Rich and intense coffee experience.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-card text-center">
                        <img src="/images/menu2.jpeg" class="img-fluid rounded-3" alt="Cappuccino">
                        <h5 class="mt-3">Cappuccino</h5>
                        <p>Balanced and creamy perfection.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-card text-center">
                        <img src="/images/menu3.jpg" class="img-fluid rounded-3" alt="Latte">
                        <h5 class="mt-3">Latte</h5>
                        <p>Smooth and silky, perfect for any time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>   

    <!-- Testimonial Section -->
    <section id="testimonials" class="testimonials-section py-5">
        <div class="container">
            <h2 class="section-title text-center">What Our Customers Say</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"The coffee here is exceptional, and the ambiance is just perfect for work or relaxation."</p>
                        <footer>- Jane Doe</footer>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"I absolutely love the futuristic design and friendly staff. Highly recommended!"</p>
                        <footer>- John Smith</footer>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"A perfect place to unwind with a cup of coffee. Their menu is fantastic!"</p>
                        <footer>- Sarah Lee</footer>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
