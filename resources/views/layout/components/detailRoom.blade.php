<div class="room-detail-container">
    <div class="room-image">
        <img src="{{ asset('assets/images/' . $room['image']) }}" alt="{{ $room['name'] }}">
    </div>
    <div class="room-info">
        <div class="section-icon">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
        </div>
        <div class="section-detail-title">
            <p>Groove Hotel</p>
            <h1>{{ $room['name'] }}</h1>
        </div>
        <p>{{ $room['description'] }}</p>
        <h2>Rp. {{ number_format($room['price'], 0, ',', '.') }}</h2>
        <button class="jumbotron-button butonDetail"><span>Book Now</span></button>
    </div>
</div>