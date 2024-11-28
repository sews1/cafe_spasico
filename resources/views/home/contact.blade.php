@extends('layout.applayout')

@section('content')
<section class="contact-page py-5" style="background: linear-gradient(120deg, #1a3c40, #0f2b2f); color: #fff;">
    <div class="container">
        <h1 class="section-title text-center fw-bold mb-3" style="font-size: 3rem; letter-spacing: 2px;">Contact Us</h1>
        <p class="section-desc text-center mb-5" style="font-size: 1.2rem; color: #b3d4d6;">We’d love to hear from you! Send us a message or visit us at our location.</p>
        <div class="row mt-5 align-items-center">
            <!-- Contact Form -->
            <div class="col-md-6 mb-4">
                <div class="contact-form-wrapper bg-white p-4 rounded-4 shadow-lg">
                    <h3 class="fw-bold text-dark mb-4" style="font-size: 1.5rem;">Get in Touch</h3>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Your Name</label>
                            <input type="text" id="name" class="form-control rounded-3" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Your Email</label>
                            <input type="email" id="email" class="form-control rounded-3" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Your Message</label>
                            <textarea id="message" class="form-control rounded-3" rows="5" placeholder="Type your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-3" style="background-color: #1a3c40; border: none;">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- Google Maps Embed -->
            <div class="col-md-6 mb-4">
                <div class="map-wrapper shadow-lg rounded-4 overflow-hidden">
                    <h3 class="fw-bold text-white mb-3" style="font-size: 1.5rem;">Visit Us</h3>
                    <p style="font-size: 1rem; color: #b3d4d6;">
                        Ruko Diponegoro Jl. Diponegoro No.A2, Dusun III, Madegondo, Kec. Grogol, Kabupaten Sukoharjo, Jawa Tengah 57552
                    </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.796599080636!2d110.8140777!3d-7.6044676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a17f1b5a2cc73%3A0x1b2af3981ea2707b!2sSPASICO%20Cafe%20%26%20Meetings!5e0!3m2!1sen!2sid!4v1697105034317!5m2!1sen!2sid"
                        class="w-100 rounded-4"
                        height="300"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
