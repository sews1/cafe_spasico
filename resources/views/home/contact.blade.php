@extends('layout.applayout')

@section('content')
<section class="contact-page py-5">
    <div class="container">
        <h1 class="section-title text-center">Contact Us</h1>
        <p class="section-desc text-center">We would love to hear from you. Drop us a message or visit us at our location!</p>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Get in Touch</h3>
                <form class="contact-form">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Visit Us</h3>
                <p>123, Futuristic Street, Modern City, Country</p>
                <iframe src="https://www.google.com/maps/embed?..." class="w-100" height="250" style="border: 0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
