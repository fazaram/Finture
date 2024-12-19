@extends('navbar.navbar')

<link rel="stylesheet" href="css/deliver.css" />

@section('layout')
  <body>
    <body>
      <div class="container-fluid m-0 p-0 ">
        <nav class="nav">
          <div class="nav-container">
            <a href="/keranjang" class="nav-item">Shopping cart</a>
            <a href="/deliver" class="nav-item active">Delivery</a>
            <a href="/complete" class="nav-item">Completed</a>
          </div>
        </nav>
        <body>
          <div class="shopping-cart">
            <div class="header">
              <div>Product</div>
              <div>Price</div>
              <div>Quantity</div>
              <div>Status</div>
            </div>
            <hr />
            <div class="product-container">
              <div class="product">
                <img src="images/cart/kursi1.png" alt="Chair" />
                <span>Seatia
                </span>
              </div>
              <div class="price">Rp.850.000</div>
              <div class="quantity">
                <input type="text" value="01" readonly />
              </div>
              <div class="status">
                <a href="/map" class="tracking-link">Tracking</a>
                <span class="deliver">On Deliver</span>
              </div>
            </div>
            <hr />
            <div class="product-container">
              <div class="product">
                <img src="images/cart/kursi2.png" alt="Chair" />
                <span>Rattanix
                </span>
              </div>
              <div class="price">Rp.700.000</div>
              <div class="quantity">
                <input type="text" value="01" readonly />
              </div>
              <div class="status">
                <a href="/map" class="tracking-link">Tracking</a>
                <span class="deliver">On Deliver</span>
              </div>
            </div>
          </div>
        </body>
      </div>
    </body>
  </body>
@endsection
