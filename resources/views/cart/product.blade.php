@extends('navbar.navbar')

<link rel="stylesheet" href="css/product.css">

@section('layout')
<div class="container my-5">
    <!-- Main Product Section -->
    <div class="product-container row align-items-center">
        <!-- Row 1: Scrollable Thumbnails -->
        <div class="col-3 gallery-thumbnails align-items-end">
            <img src="images/cart/thumb1.png" alt="Thumbnail 1" class="active">
            <img src="images/cart/thumb2.png" alt="Thumbnail 2">
            <img src="images/cart/thumb3.png" alt="Thumbnail 3">
        </div>

        <!-- Row 2: Main Image and Color Selection -->
        <div class="col-3 gallery-main">
            <img src="images/cart/thumb1.png" alt="Main Chair Image" id="main-image">
            <div class="color-options">
                <div class="color1 active" data-color="images/cart/thumb1.png"></div>
                <div class="color2" data-color="images/cart/thumb2.png"></div>
                <div class="color3" data-color="images/cart/thumb3.png"></div>
            </div>
        </div>

        <!-- Row 3: Product Details -->
        <div class="col product-details">
            <div class="details">
                <div class="row align-items-center">
                    <h1 class="col">Seatia</h1>
                    <div class=" col rating">
                        <span>⭐⭐⭐⭐⭐</span>
                    </div>
                </div>
                <div class="row align-items-center">
                    <p class="col-2 price m-0">
                        Price
                    </p>
                    <span class="col-2 fw-bold">
                        Rp.850.000
                    </span>

                    <del class="col-2 text-muted">
                        Rp.1000.000
                    </del>

                </div>

                <hr>
                <div>
                    About the product:
                    <p class="m-0">the material</p>
                    <ul class="m-0 ps-3">
                        <li>Wood</li>
                        <li>Rebounded</li>
                        <li>Cloth combined</li>
                    </ul>
                    <p class="m-0">diameter</p>
                    <ul class="m-0 ps-3">
                        <li>High 60cm</li>
                        <li>Length 45 x 45</li>
                    </ul>
                </div>
            </div>

            <div class="cart-section align-items-center mt-3">
               <div class="col-2 d-flex justify-content-start mt-2 gap-2">
                    <button class="btn p-0 heart-button">
                        <i class="bi bi-heart-fill"></i>
                    </button>
                    <button class="btn p-0 cart-button">
                        <i class="bi bi-cart"></i>
                    </button>
                </div>
                <div class="col quantity">
                    <button>-</button>
                    <input class="text-center inputview" type="text" value="01">
                    <button>+</button>
                </div>
                <div class="col-5">
                    <a href="/payment" class="payment">Next to payment</a>
                </div>
            </div>
        </div>
    </div>
 <script src="js/product.js"></script>

    <!-- Related Products Section -->
    <div class="row gy-4 mb-3">
        <!-- Loop produk -->
        @foreach ([
           'chair1.png' => ['name' => 'FlexSit', 'price' => 'Rp.550.000'],
'chair2.png' => ['name' => 'Seatia', 'price' => 'Rp.850.000'],
'chair3.png' => ['name' => 'Luxenta', 'price' => 'Rp.900.000'],
'chair4.png' => ['name' => 'Elysit', 'price' => 'Rp.600.000']
        ] as $image => $product)
        <div class="col-6 col-md-3 text-center">
            <div class="card">
                <img src="images/home/{{ $image }}" class="card-img-top p-3" alt="Product Image">
                <div class="card-body px-3 p-0">
                    <h6 class="card-title m-0" style="color: black">{{ $product['name'] }}</h6>
                    <p class="text-muted m-0">{{ $product['price'] }}</p>
                    <div class="row align-items-center">
                        <div class="col">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <div class="col d-flex justify-content-end mt-2 gap-2">
                            <button class="btn p-0">
                                <i class="bi bi-heart"></i>
                            </button>
                            <button class="btn p-0">
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

@endsection
