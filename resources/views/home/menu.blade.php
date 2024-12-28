@extends('layout.applayout')

@section('content')
<section class="menu-page" style="background: linear-gradient(120deg, #1a3c40, #0f2b2f);">
    <div class="container">
        <h1 class="section-title text-center text-white fw-bold">Our Menu</h1>
        <p class="section-desc text-center text-white mb-5">Discover the perfect blend of flavors and artistry in every dish and cup.</p>

        <!-- Menu Section -->
        @php
        $menuSections = [
            'Snack' => [
                'Chicken Wings' => '/images/snacks/wings.jpeg',
                'French Fries' => '/images/snacks/kentang.jpeg',
                'Fried Cireng' => '/images/snacks/cireng.jpeg',
                'Pisang Coklat Sweet' => '/images/snacks/pisang.jpeg',
                'Spasico Mix Platter' => '/images/snacks/mix.jpg',
            ],
            'Food' => [
                'Indomie Goreng All Variant' => '/images/foods/mie-goreng.jpeg',
                'Indomie Kuah All Variant' => '/images/foods/mie-kuah.jpeg',
            ],
            'Beverages' => [
                'Espresso' => '/images/beverages/espresso.jpeg',
                'Americano' => '/images/beverages/americano.jpeg',
                'Honey Americano' => '/images/beverages/Honey-Americano.jpeg',
                'Black Tubruk' => '/images/beverages/Tubruk.jpeg',
                'Cappuccino' => '/images/beverages/cappucino.jpeg',
                'Spasico Signature Latte' => '/images/beverages/latte.jpeg',
            ],
            'Non Coffee' => [
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
            ]
        ];
        @endphp

        @foreach ($menuSections as $category => $items)
        <div class="menu-section mt-3">
            <h2 class="menu-category text-center text-white fw-bold">{{ $category }}</h2>
            <div class="row mt-2 g-3">
                @foreach ($items as $item => $image)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="menu-card">
                        <img src="{{ $image }}" class="menu-img" alt="{{ $item }}">
                        <h5 class="menu-title text-white">{{ $item }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach

    </div>
</section>
@endsection