@extends('layout.applayout')

@section('content')
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
