@extends('navbar.navbar')

<link rel="stylesheet" href="css/payment.css" />

@section('layout')

    <main>
      <!-- Payment Form -->
      <form class="payment-form">
        <div class="form-group">
          <div class="form-group1">
            <label for="full-name">Full name</label>
            <input
              class="input-shadow"
              type="text"
              id="full-name"
              placeholder="...."
            />
          </div>
          <div class="form-group1">
            <label for="address-street">Address street</label>
            <input
              class="input-shadow"
              type="text"
              id="address-street"
              placeholder="...."
            />
          </div>
          <div class="form-group1">
            <label for="phone-number">Phone Number</label>
            <input
              class="input-shadow"
              type="text"
              id="phone-number"
              placeholder="...."
            />
          </div>
          <div class="form-group1">
            <label for="email-address">Email address</label>
            <input
              class="input-shadow"
              type="email"
              id="email-address"
              placeholder="...."
            />
          </div>
        </div>

        <div class="form-actions">
          <a href="/keranjang" class="return-button"> Return</a>

          <a href="/deliver" class="checkout-button">Check out</a>
        </div>
      </form>

      <!-- Payment Summary -->
      <div class="total">
        <div class="src">
          <label class="search" for="code"></label>
          <input type="text" id="code" class="input" placeholder="Code..." />
          <button class="apply">Apply</button>
        </div>
        <div class="summary">
          <div class="row1">
            <span>Subtotal:</span>
            <span>Rp.850.000</span>
          </div>
          <hr />
          <div class="row">
            <span>Shipping:</span>
            <span>Free</span>
          </div>
          <hr />
          <div class="row">
            <span>Total:</span>
            <span>Rp.850.000</span>
          </div>
          <div class="payment-methods">
            <label>
              <input type="radio" name="payment-method" value="bank" />
              Bank
              <div class="bank-images">
                @foreach (['pm1.png', 'pm2.png', 'pm3.png', 'pm.png'] as $payment)
                  <img src="images/cart/{{ $payment }}" alt="{{ $payment }}" />
                @endforeach
              </div>
            </label>
            <label>
              <input type="radio" name="payment-method" value="cod" checked />
              Cash on delivery
            </label>
          </div>
        </div>
      </div>
    </main>
@endsection
