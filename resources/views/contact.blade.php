@extends('navbar.navbar')

<link rel="stylesheet" href="css/contact.css" />

@section('layout')
<div class="container">
    <div class="p-3 d-flex justify-content-between align-items-center">
        <a href="/" class="text-decoration-none text-dark fw-bold custom-style">
            <i class="bi bi-arrow-left me-1"></i>
            Return
        </a>
    </div>

    <!-- Chat Container -->
    <div class="container my-3 m-0 pt-1 px-0 bg-dark title">
        <div class="text-center">
            <h3 class="fw-bold m-3"><u style="color: white;">Contact Assistant</u></h3>
        </div>

        <!-- Chat Area -->
        <div class="chat-box border mx-auto p-3">
            <!-- Assistant Chat -->
            <div class="d-flex mb-4">
                <div class="me-2">
                    <i class="bi bi-person-circle fs-2"></i>
                </div>
                <div>
                    <p class="mb-1 fw-bold">Assistance</p>
                    <div class="chat-bubble rounded-3 p-2">
                        How I can help you?
                    </div>
                </div>
            </div>

            <!-- User Chat with Image -->
            <div class="d-flex justify-content-end mb-4">
                <div class="text-end">
                    <p class="mb-1 fw-bold">You</p>
                    <div class="chat-bubble user-chat p-2 rounded-3">
                        <p class="mb-1">I need help! About this product, I need specification</p>
                        <div class="container">
                            <img src="images/home/chair2.png" class="card-img-top p-3" alt="Product Image">
                            <div class="card-body" style="text-align: left">
                                <h6 class="card-title m-0">Seatia
                                </h6>
                                <p class="text-muted m-0">Rp.850.000</p>
                                <div class="row align-items-center">
                                    <div class="col">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <div class="col d-flex justify-content-end mt-2 gap-2">
                                        <button class="btn p-0 heart-button">
                                            <i class="bi bi-heart-fill"></i>
                                        </button>
                                        <button class="btn p-0">
                                            <i class="bi bi-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-2">
                    <i class="bi bi-person-circle fs-2"></i>
                </div>
            </div>

            <!-- Assistant Response -->
            <div class="d-flex mb-4">
                <div class="me-2">
                    <i class="bi bi-person-circle fs-2"></i>
                </div>
                <div>
                    <p class="mb-1 fw-bold">Assistance</p>
                    <div class="chat-bubble rounded-3 p-2">
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
            </div>
        </div>

        <!-- Input Area -->
        <div class="input-area border-top py-3 px-3 d-flex align-items-center">
            <button class="btn btn-outline-dark bg-white rounded-circle me-2">
                <i class="bi bi-plus-lg fs-4"></i>
            </button>
            <input type="text" class="form-control rounded-pill me-2" placeholder="Type your message...">
            <button class="btn btn-dark bg-white rounded-circle">
                <i class="bi bi-send-fill text-dark fs-5"></i>
            </button>
        </div>
    </div>
</div>

@endsection
