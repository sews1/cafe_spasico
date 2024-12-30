@extends('layout.applayout')

@section('content')
    <section class="about-page py-5">
        <div class="container">
            <h1 class="section-title text-center" data-aos="fade-up">About Spasico Cafe</h1>
            <p class="section-desc text-center" data-aos="fade-up" data-aos-delay="300">
                Spasico Cafe is not just a coffee shop; it's an experience. Blending modern design, premium coffee, and
                an artistic atmosphere, we aim to redefine coffee culture.
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
                        <li>Special events, live music, and art exhibitions.</li>
                        <li>Free high-speed Wi-Fi for all customers.</li>
                    </ul>
                    <a href="/contact" class="btn btn-primary mt-2 custom-btn">Contact Us</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="500">
                    <h3 class="section-subtitle">Our Mission</h3>
                    <p>
                        At Spasico Cafe, our mission is to create a unique space where community, creativity, and quality
                        coffee converge. We are committed to sustainability and fostering meaningful connections.
                    </p>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="500">
                    <h3 class="section-subtitle">Our Vision</h3>
                    <p>
                        To become a globally recognized café brand that inspires and connects people through coffee and art,
                        making every visit an unforgettable experience.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="section-subtitle text-center">Our Core Values</h3>
                    <div class="row mt-4">
                        <div class="col-md-4 text-center">
                            <div class="value-item">
                                <h4>Quality</h4>
                                <p>
                                    We source the finest coffee beans to ensure every cup exceeds expectations.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="value-item">
                                <h4>Community</h4>
                                <p>
                                    Creating a welcoming space that brings people together.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="value-item">
                                <h4>Sustainability</h4>
                                <p>
                                    Embracing eco-friendly practices to protect our planet for future generations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="600">
                    <h3 class="section-subtitle">Our Story</h3>
                    <p>
                        Spasico Cafe was born out of a passion for coffee and a vision to create a space where art, design, and
                        community could thrive. Since our inception, we've been dedicated to delivering exceptional experiences
                        to every guest who walks through our doors.
                    </p>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="600">
                    <img src="/images/hero1.jpeg" class="img-fluid rounded-3" alt="Our Story">
                </div>
            </div>
        </div>
    </section>
@endsection
