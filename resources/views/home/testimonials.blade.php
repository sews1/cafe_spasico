@extends('layout.applayout')

@section('content')
<section id="testimonials" class="testimonials-page py-5">
    <div class="container">
        <h2 class="section-title text-center">What Our Customers Say</h2>
        <div class="row mt-4 g-4">
            @php
            $testimonials = [
                ["text" => "Tempat nyaman buat nongki2 Spasico  mix platernya enakkkkkkkkkkkk.", "author" => "Delphia Sara"],
                ["text" => "Tempat Nyaman & tenang, Americanonya   ok", "author" => "San san"],
                ["text" => "nyamann buat nongki2 dan belajar kelompok dll!", "author" => "Jeremy"],
                ["text" => "Best coffee shop in town! The service is always top-notch.", "author" => "Alice Brown"],
                ["text" => "Their attention to detail in every cup of coffee is truly commendable.", "author" => "Robert Wilson"],
                ["text" => "Great atmosphere, amazing coffee, and the staff always greet you with a smile.", "author" => "Emily Davis"],
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
