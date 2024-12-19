@extends('navbar.navbar')

<link rel="stylesheet" href="css/keranjang.css" />

@section('layout')
  <!-- buat navbar -->
  <nav class="nav">
    <div class="nav-container">
      <a href="/keranjang" class="nav-item active">Shopping cart</a>
      <a href="/deliver" class="nav-item">Delivery</a>
      <a href="/complete" class="nav-item">Completed</a>
    </div>
  </nav>

  <!-- buat content -->
  <main>
    <div class="cart-container">
      <body>
        <div class="shopping-cart">
          <div class="header">
            <div>Product</div>
            <div>Price</div>
            <div>Quantity</div>
          </div>
          <div class="item">
            <div class="product">
              <input type="checkbox" />
              <img src="images/cart/kursi1.png" alt="Chair" />
              <span>Seatia
            </span>
            </div>
            <div class="price">Rp.850.000</div>
            <div class="quantity">
              <button class="decrement">-</button>
              <input type="text" value="01" readonly />
              <button class="increment">+</button>
            </div>
          </div>
          <div class="item">
            <div class="product">
              <input type="checkbox" />
              <img src="images/cart/kursi2.png" alt="Chair" />
              <span>Rattanix
            </span>
            </div>
            <div class="price">Rp.700.000</div>
            <div class="quantity">
              <button class="decrement">-</button>
              <input type="text" value="01" readonly />
              <button class="increment">+</button>
            </div>
          </div>
          <div class="item">
            <div class="product">
              <input type="checkbox" />
              <img src="images/cart/table.png" alt="Table" />
              <span>Tavla
            </span>
            </div>
            <div class="price">Rp.1.260.000</div>
            <div class="quantity">
              <button class="decrement">-</button>
              <input type="text" value="01" readonly />
              <button class="increment">+</button>
            </div>
          </div>
          <div class="item">
            <div class="product">
              <input type="checkbox" />
              <img src="images/cart/wardrop.png" alt="Wardrobe" />
              <span>Staxo</span>
            </div>
            <div class="price">Rp.1.800.000</div>
            <div class="quantity">
              <button class="decrement">-</button>
              <input type="text" value="01" readonly />
              <button class="increment">+</button>
            </div>
          </div>
          <div class="item">
            <div class="product">
              <input type="checkbox" />
              <img src="images/cart/chair4.png" alt="Wardrobe" />
              <span>Elysit
            </span>
            </div>
            <div class="price">Rp.600.000</div>
            <div class="quantity">
              <button class="decrement">-</button>
              <input type="text" value="01" readonly />
              <button class="increment">+</button>
            </div>
          </div>
        </div>
      </body>

      <!-- buat summary -->
      <div class="total">
        <div class="src">
          <label class="search" for="code"></label>
          <input type="text" id="code" class="input" placeholder="Code..." />
          <button class="apply">Apply</button>
        </div>
        <div class="summary">
          <div class="row1">
            <span>Subtotal:</span>
            <span>Rp.5.210.000</span>
          </div>
          <hr />
          <div class="row">
            <span>Shipping:</span>
            <span>Free</span>
          </div>
          <hr />
          <div class="row">
            <span>Total:</span>
            <span>Rp.5.210.000</span>
          </div>
          <button class="payment-btn">
            <a href="/payment" class="btn">Next to Payment</a>
          </button>
        </div>
      </div>
    </div>
  </main>
@endsection
