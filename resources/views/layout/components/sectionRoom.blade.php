<div class="section-dataroom-title">
    <p>Groove Hotel</p>
    <h2>Rooms & Suites</h2>
</div>
<article class="dataroom-container" id="room">
<tbody>
    @foreach ($rooms as $room)
        <div class="card-dataroom">
            <a href="{{ route('rooms.show', ['id' => $room['id']]) }}">
                <div class="dataroom-image">
                    <img src="{{ asset('assets/images/' . $room['image']) }}" alt="{{ $room['name'] }}">
                </div>
                <div class="dataroom-booking">
                    <p>Book</p>
                </div>
                <div class="dataroom-name">
                    <h3>{{ $room['name'] }}</h3>
                </div>
                <div class="dataroom-price">
                    <h4>Rp.{{ number_format($room['price'], 0, ',', '.') }}</h4>
                </div>
                <div class="dataroom-detail">
                    <p>Details &#8594;</p>
                </div>
            </a>
        </div>
    @endforeach
</tbody>
</article>