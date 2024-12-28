@extends('layout.applayout')

@section('content')
<section class="about-page py-5">
    <div class="container">
        <h1 class="section-title text-center" data-aos="fade-up">About Spasico Cafe</h1>
        <p class="section-desc text-center" data-aos="fade-up" data-aos-delay="300">
            Spasico Cafe is not just a coffee shop; it's an experience. Blending modern design, premium coffee, 
            and an artistic atmosphere, we aim to redefine coffee culture.
        </p>
        <div class="row mt-5">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="400">
                <img src="/images/hero.jpeg" class="img-fluid rounded-3 about-img" alt="About Cafe">
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="500">
                <h3 class="section-subtitle">Why Choose Us?</h3>
                <ul class="features-list">
                    <li>Premium, freshly brewed coffee.</li>
                    <li>Artistic and futuristic café design.</li>
                    <li>A perfect place for work and relaxation.</li>
                    <li>Friendly and professional staff.</li>
                </ul>
                <a href="#contact" class="btn btn-primary mt-3 custom-btn">Contact Us</a>
            </div>
        </div>

        <!-- Mission Section -->
        <div class="mission-section mt-5 py-5" data-aos="fade-up" data-aos-delay="600">
            <h2 class="section-subtitle text-center">Our Mission</h2>
            <p class="section-desc text-center">
                At Spasico Cafe, we strive to create a community space where everyone feels welcome. Our mission is to 
                provide exceptional coffee, promote creativity, and foster connections among our patrons.
            </p>
        </div>

        <!-- Team Section -->
        <div class="team-section mt-5 py-5" data-aos="fade-up" data-aos-delay="700">
            <h2 class="section-subtitle text-center">Meet Our Team</h2>
            <div class="row mt-4">
                <div class="col-md-4 text-center">
                    <img src="/images/profil.jpeg" class="img-fluid rounded-circle mb-3" alt="Team Member">
                    <h4 class="team-name">Sophia Johnson</h4>
                    <p class="team-role">Head Barista</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/images/profil.jpeg" class="img-fluid rounded-circle mb-3" alt="Team Member">
                    <h4 class="team-name">Ethan Brown</h4>
                    <p class="team-role">Cafe Manager</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="/images/profil.jpeg" class="img-fluid rounded-circle mb-3" alt="Team Member">
                    <h4 class="team-name">Liam Smith</h4>
                    <p class="team-role">Creative Director</p>
                </div>
            </div>
        </div>

        <!-- History Section -->
        <div class="history-section mt-5 py-5" data-aos="fade-up" data-aos-delay="800">
            <h2 class="section-subtitle text-center">Our Story</h2>
            <p class="section-desc text-center">
                Founded in 2021, Spasico Cafe started as a small neighborhood coffee shop. Over the years, we 
                have grown into a thriving community hub, known for our quality coffee and inspiring atmosphere.
            </p>
        </div>
    </div>
</section>
@endsection
