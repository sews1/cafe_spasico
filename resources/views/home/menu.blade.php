@extends('layout.applayout')

@section('content')
<section class="menu-page py-5" style="background: linear-gradient(120deg,#1a3c40, #1a3c40);">
    <div class="container">
        <h1 class="section-title text-center text-white fw-bold">Our Menu</h1>
        <p class="section-desc text-center text-white mb-5">Discover the perfect blend of flavors and artistry in every dish and cup.</p>
        
        <!-- Snack Section -->
        <div class="menu-section mt-5">
            <h2 class="menu-category text-center text-white fw-bold">Snack</h2>
            <div class="row g-4 mt-4">
                @php
                $snackImages = [
                    'Chicken Wings' => '/images/snacks/wings.jpeg',
                    'French Fries' => '/images/snacks/kentang.jpeg',
                    'Fried Cireng' => '/images/snacks/cireng.jpeg',
                    'Pisang Coklat Sweet' => '/images/snacks/pisang.jpeg',
                    'Spasico Mix Platter' => '/images/snacks/mix.jpg',
                ];
                @endphp
                @foreach ($snackImages as $snack => $image)
                <div class="col-md-4">
                    <div class="menu-card card border-0 shadow-lg p-3 rounded-4 text-center bg-white">
                        <img src="{{ $image }}" class="card-img-top img-fluid rounded-3 menu-img" alt="{{ $snack }}">
                        <div class="card-body">
                            <h5 class="card-title mt-2 fw-bold text-dark">{{ $snack }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Food Section -->
        <div class="menu-section mt-5">
            <h2 class="menu-category text-center text-white fw-bold">Food</h2>
            <div class="row g-4 mt-4">
                @php
                $foodImages = [
                    'Indomie Goreng All Variant' => '/images/foods/mie-goreng.jpeg',
                    'Indomie Kuah All Variant' => '/images/foods/mie-kuah.jpeg',
                ];
                @endphp
                @foreach ($foodImages as $food => $image)
                <div class="col-md-6">
                    <div class="menu-card card border-0 shadow-lg p-3 rounded-4 text-center bg-white">
                        <img src="{{ $image }}" class="card-img-top img-fluid rounded-3 menu-img" alt="{{ $food }}">
                        <div class="card-body">
                            <h5 class="card-title mt-2 fw-bold text-dark">{{ $food }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Beverages Section -->
        <div class="menu-section mt-5">
            <h2 class="menu-category text-center text-white fw-bold">Beverages</h2>
            <div class="row g-4 mt-4">
                @php
                $beverageImages = [
                    'Espresso' => '/images/beverages/espresso.jpeg',
                    'Americano' => '/images/beverages/americano.jpeg',
                    'Honey Americano' => '/images/beverages/Honey-Americano.jpeg',
                    'Black Tubruk' => '/images/beverages/Tubruk.jpeg',
                    'Cappucino' => '/images/beverages/cappucino.jpeg',
                    'Spasico Signature Latte' => '/images/beverages/latte.jpeg',
                    'Hazel Brown Latte' => '/images/beverages/brown-latte.jpeg',
                    'Spasi Brown Coffee' => '/images/beverages/brown-latte.jpeg',
                    'Coffe Latte' => '/images/beverages/coffe-latte.jpeg',
                    'Vanila Latte' => '/images/beverages/latte.jpeg',
                    'Hazelnut Latte' => '/images/beverages/Hazelnut-latte.jpeg',
                    'Rum Latte' => '/images/beverages/rum-latte.jpeg',
                    'Coffe Matte' => '/images/beverages/americano.jpeg',
                    'Lemonade Coffeshot' => '/images/beverages/lemoncoffe.jpeg',
                ];
                @endphp
                @foreach ($beverageImages as $beverage => $image)
                <div class="col-md-4">
                    <div class="menu-card card border-0 shadow-lg p-3 rounded-4 text-center bg-white">
                        <img src="{{ $image }}" class="card-img-top img-fluid rounded-3 menu-img" alt="{{ $beverage }}">
                        <div class="card-body">
                            <h5 class="card-title mt-2 fw-bold text-dark">{{ $beverage }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Non Coffee Section -->
        <div class="menu-section mt-5">
            <h2 class="menu-category text-center text-white fw-bold">Non Coffee</h2>
            <div class="row g-4 mt-4">
                @php
                $nonCoffeeImages = [
                    'Black Tea' => '/images/beverages/es-teh.jpeg',
                    'Lychee Tea' => '/images/beverages/lychee-tea.jpeg',
                    'Lemon Tea' => '/images/beverages/lemon-tea.jpeg',
                    'Milk Tea' => '/images/beverages/milk-tea.jpeg',
                    'Choco Latte' => '/images/beverages/choco-latte.jpeg',
                    'Choco Rum' => '/images/beverages/choco-rum.jpeg',
                    'Matcha Latte' => '/images/beverages/matcha.jpeg',
                    'Redvelvet Latte' => '/images/beverages/redvelvet.jpeg',
                    'Taro Latte' => '/images/beverages/taro-latte.jpeg',
                    'Lychee Yakult' => '/images/beverages/yakult.jpeg',
                ];
                @endphp
                @foreach ($nonCoffeeImages as $nonCoffee => $image)
                <div class="col-md-4">
                    <div class="menu-card card border-0 shadow-lg p-3 rounded-4 text-center bg-white">
                        <img src="{{ $image }}" class="card-img-top img-fluid rounded-3 menu-img" alt="{{ $nonCoffee }}">
                        <div class="card-body">
                            <h5 class="card-title mt-2 fw-bold text-dark">{{ $nonCoffee }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<style>
    .menu-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease-in-out;
    }

    .menu-img {
        height: 200px;
        object-fit: cover;
    }

    .menu-section {
        padding-top: 40px;
    }
</style>
@endsection
