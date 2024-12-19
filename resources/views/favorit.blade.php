@extends('navbar.navbar')

<link rel="stylesheet" href="css/favorit.css">

@section('layout')
<div class="container">
    <div class="container-fluid my-5">
        <h1 class="fw-bold">My Favorit</h1>
        <div class="row gy-4 mb-3 py-5">
            @foreach ([
'op1.png' => ['name' => 'Cosetta', 'price' => 'Rp.600.000'],
'op2.png' => ['name' => 'Rattanix', 'price' => 'Rp.700.000'],
'op3.png' => ['name' => 'Tavla', 'price' => 'Rp.1.260.000'],
'op4.png' => ['name' => 'Staxo', 'price' => 'Rp.1.800.000'],
'op5.png' => ['name' => 'Sittora', 'price' => 'Rp.950.000'],
'op6.png' => ['name' => 'Boxio', 'price' => 'Rp.2.670.000'],
'op7.png' => ['name' => 'Nordica', 'price' => 'Rp.1.820.000'],
'op8.png' => ['name' => 'Deskora', 'price' => 'Rp.1.590.000'],
'chair1.png' => ['name' => 'FlexSit', 'price' => 'Rp.550.000'],
'chair2.png' => ['name' => 'Seatia', 'price' => 'Rp.850.000'],
'chair3.png' => ['name' => 'Luxenta', 'price' => 'Rp.900.000'],
'chair4.png' => ['name' => 'Elysit', 'price' => 'Rp.600.000']
            ] as $image => $product)
            <div class="col-6 col-md-3 text-center">
                <div class="card1 d-flex flex-column h-full">
                    <img src="images/home/{{ $image }}" class="card-img-top1 mt-auto" alt="Product Image">
                    <div class="card-body1 mt-3">
                        <h6 class="card-title m-0">{{ $product['name'] }}</h6>
                        <p class="text-muted m-0">{{ $product['price'] }}</p>
                        <div class="row align-items-center">
                            <div class="col">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <div class="col d-flex justify-content-end mt-2 gap-2">
                                <button class="btn p-0 heart-button">
                                    <i class="bi bi-heart-fill"></i>
                                </button>
                                <button class="btn p-0 cart-button">
                                    <i class="bi bi-cart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
