<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <title>Finture</title>
</head>
<body>

    <div class="page-container">
        {{-- navbar 1 --}}
        <nav class="navbar navbar-light nav1 w-100">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="/images/navbar/finture logo.png" alt="" class="w-100 h-100 p-0 m-0">
            </a>
                <div class="box"> 
                    <a href="" class="text-decoration-none account">Master</a>
                    <i class="fa-regular fa-circle-user"></i>
                </div>
        
            </div>
        </nav>

        {{-- navbar 2 --}}
        <nav class="navbar navbar-expand-lg navbar-light bg-dark nav2 w-100">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col align-items-left" id="navbarSupportedContent">
                    <div class="col">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/" style="color: white">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact" style="color: white">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
                        </form>
                    </div>
                    <div class="col d-flex justify-content-end align-items-center">\
                        <a href="/favorit">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                        <a href="/keranjang">
                            <i class="bi bi-cart ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- content --}}
        <div class="wrap m-0 p-0">
            @yield('layout')
        </div>

        {{-- footer --}}
        <footer>
            <div class="container ">
                <div class="row align-items-start mt-3 mb-2">
                    <div class="col-2">
                        <h5><u>Support</u></h5>
                        <p class="m-0"><u>Help</u></p>
                        <p class="m-0">+62 8xxxxxxxxxxx</p>
                        <p class="m-0">koj@gmail.com</p>
                    </div>
                    <div class="col-6">
                        <h5><u>Account</u></h5>
                        <p class="m-0">My Account</p>
                        <p class="m-0">Login / Register</p>
                        <p class="m-0">Bookmark</p>
                        <p class="m-0">Trolley</p>
                        <p class="m-0">Payment</p>
                    </div>
                    <div class="col-4 text-end align-items-center app-download-section">
                        <img src="images/footer/barcode.png" alt="QR Code" class="qr-code">
                        <div class="store-buttons">
                            <img src="images/footer/gplay.png" alt="Get it on Google Play" class="google-play">
                            <img src="images/footer/appstore.png" alt="Download on the App Store" class="app-store">
                        </div>
                    </div>
                </div>
            </div>
            <p class="m-0 p-2" style="color: rgba(114, 114, 114, 1);">Bandung, Buah Batu, Telkom University</p>
        </footer> 
    </div>

     
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>