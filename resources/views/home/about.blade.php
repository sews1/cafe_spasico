@extends('layout.applayout')

@section('content')
<section class="about-page py-5">
    <div class="container">
        <h1 class="section-title text-center" data-aos="fade-up">About Cafe Spasico</h1>
        <p class="section-desc text-center" data-aos="fade-up" data-aos-delay="300">
            Cafe Spasico is not just a coffee shop; it's an experience. Blending modern design, premium coffee, 
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
    </div>
</section>
@endsection
