@extends('navbar.navbar')

<link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

@section('layout')
<div class="container">

    <!-- Bagian Kategori -->
    <div class="row align-items-center mb-4 mt-3">
        <div class="col-md-2 text-center">
            <h5 class="mb-3">Kategori</h5>
            <div class="row gy-3">

                <!-- Item kategori -->
                @foreach (['box1.png', 'box2.png', 'box3.png', 'box4.png', 'box5.png', 'box6.png'] as $kategori)
                <div class="col-6">
                    <a href="#">
                        <img src="images/home/{{ $kategori }}" alt="{{$kategori}}" class="img-fluid">
                    </a>
                </div>
                @endforeach
            </div>
            <div class="mt-5">
            </div>
        </div>

        <!-- Bagian Diskon -->
        <div class="swiper mySwiper col-md-10 p-0">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="parent mt-5">
                        <div class="p-4 position-relative imagescroll">
                            <div class="text-diskon text-overlay text-center position-absolute start-0 translate-middle-y ms-4">
                                <h2 class="fw-bold diskon m-0">DISKON</h2>
                                <h2 class="fw-bold diskon1 m-0">50%</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="parent mt-5">
                        <div class="p-4 position-relative imagescroll1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bagian Produk Terbaik -->
    <div class="mt-5 pt-5">
        <h5 class="mb-3">Best Product <span class="fw-bold">OCTOBER 2024</span></h5>
        <div class="row gy-4 mb-3">

            @foreach ([
                'chair1.png' => ['name' => 'FlexSit', 'price' => 'Rp.550.000'],
'chair2.png' => ['name' => 'Seatia', 'price' => 'Rp.850.000'],
'chair3.png' => ['name' => 'Luxenta', 'price' => 'Rp.900.000'],
'chair4.png' => ['name' => 'Elysit', 'price' => 'Rp.600.000']
            ] as $image => $product)
            <div class="col-6 col-md-3 text-center">
                <a class="card" href="/product">
                    <img src="images/home/{{ $image }}" class="card-img-top p-3" alt="Product Image">
                    <div class="card-body">
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
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <hr class="my-5"/>

    {{-- bagian new arrival --}}
    <div class="container-fluid">
        <h5>Featured</h5>
        <h1><u class="fw-bold">New Arrival</u></h1>
        <div class="container px-5 py-4 text-center">
            <div class="row justify-content-center align-items-center gx-0">
                <!-- Kolom Kiri -->
                <div class="col-auto p-0 position-relative">
                    <img src="images/home/na1.png" alt="Rotan Table" class="img-fluid">
                    <!-- Teks pada Gambar -->
                    <div class="image-text position-absolute bottom-0 start-0 p-3">
                        <h3><span style="font-weight: bold;">N</span>ew design<br>with rotan</h3>
                    </div>
                </div>
                <!-- Kolom Kanan dengan Lebar Menyesuaikan -->
                <div class="col-auto p-0">
                    <div class="position-relative">
                        <img src="images/home/na2.png" alt="Small Rotan Table" class="img-fluid">
                        <div class="image-text position-absolute top-0 end-0 p-3">
                            <u><span style="font-weight: bold;">Shop now</span></u>
                        </div>
                    </div>
                    <div class="m-0">
                        <img src="images/home/na3.png" alt="Room with Rotan Table" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bagian our product --}}
    <div class="container-fluid my-5">
        <h5>Our Product</h5>
        <h1><u class="fw-bold">Our Product</u></h1>
        <div class="row gy-4 mb-3 py-5">
            <!-- Loop produk -->
            @foreach ([
              'op1.png' => ['name' => 'Cosetta', 'price' => 'Rp.600.000'],
'op2.png' => ['name' => 'Rattanix', 'price' => 'Rp.700.000'],
'op3.png' => ['name' => 'Tavla', 'price' => 'Rp.1.260.000'],
'op4.png' => ['name' => 'Staxo', 'price' => 'Rp.1.800.000'],
'op5.png' => ['name' => 'Sittora', 'price' => 'Rp.950.000'],
'op6.png' => ['name' => 'Boxio', 'price' => 'Rp.2.670.000'],
'op7.png' => ['name' => 'Nordica', 'price' => 'Rp.1.820.000'],
'op8.png' => ['name' => 'Deskora', 'price' => 'Rp.1.590.000']
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
        <button class="button btnView">View All Products</button>
    </div>

</div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
@endsection
