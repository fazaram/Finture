  @extends('navbar.navbar')
  
  <link rel="stylesheet" href="css/map.css" />

@section('layout')
    <!-- Navigation -->
    <nav class="nav">
      <div class="nav-container">
        <a href="/keranjang" class="nav-item">Shopping cart</a>
        <a href="/deliver" class="nav-item active">Delivery</a>
        <a href="/complete" class="nav-item">Completed</a>
      </div>
    </nav>

    <!-- Map Section -->
    <div class="map m-0 p-0 h-full">
      <div class="image-slideshow">
        @foreach (['ss (5).png', 'ss (4).png', 'ss (3).png', 'ss (2).png', 'ss (1).png'] as $map)
            <img src="images/cart/{{ $map }}" alt="{{ $map }}" class="slide" />
        @endforeach
        
      </div>
    </div>
  </body>
@endsection