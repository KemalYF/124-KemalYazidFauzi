<div class="container-footer">
    <div class="description-footer">
        <div class="section-subtitle-footer">
            <div class="section-icon-footer">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h4>Groove Hotel - your ideal retreat.
                Enjoy a cozy and modern ambiance, complemented by a range of
                comprehensive facilities to cater to your needs.</h4>
            <div class="section-reservations">
                {{-- <div class="reservation-icon">
                    <i class="fa-brands fa-whatsapp"></i>
                </div> --}}
                <div class="reservation-description">
                    <p>Reservation</p> <span><a href="tel:+62-123-456-789">+62-123-456-789</a></span>
                    <p>Whatsapp Reservation</p> <span><a c href="tel:+62-123-456-789">+62-123-456-789</a></span>
                    <p>Email</p> <span><a href="reservation@groovehotel.com">reservation@groovehotel.com</a></span>
                </div>
            </div>
        </div>
        <div class="card-container-footer">
            <div class="card-footer">
                <p>Rooms & Suites</p>
                <h2>Hotel Booking Form</h2>
                <hr>
                <form>
                    <label for="checkin">Check in</label>
                    <input type="date" id="checkin" name="checkin">
                    <label for="checkout">Check out</label>
                    <input type="date" id="checkout" name="checkout">
                    <select id="adults" name="adults">
                        <option value="1">Adults</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <select id="children" name="children">
                        <option value="0">Children</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <button class="button-footer btn" type="submit"><span>Check Availability</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-content">
            <h2>Groove Hotel</h2>
            <p>
                Groove Hotel offers an unparalleled blend of luxury, comfort, and convenience, ensuring an
                unforgettable stay for our guests. Nestled in the heart of the city, our hotel is designed
                to cater to the discerning traveler, with exquisite rooms, exceptional dining, and a range
                of top-notch amenities. Whether you're here for business or leisure, Groove Hotel is committed
                to providing a seamless and enriching experience
            </p>
        </div>
        <div class="footer-content">
            <h2>Explore</h2>
            <p><a href="#">Home</a></p>
            <p><a href="{{ url('/room') }}">Room</a></p>
            <p><a href="{{ url('/facilities') }}">Facilities</a></p>
            <p><a href="{{ url('/about') }}">Contact</a></p>
        </div>
        <div class="footer-content">
            <h2>Contact</h2>
            <p>Groove Hotel, 123 Eldia Marley</p>
            <div class="footer-inner-content">
                <div>
                    <h3>Phone</h3>
                    <p>+62 123 456 789</p>
                </div>
                <div>
                    <h3>Email</h3>
                    <p>reservation@groovehotel.com</p>
                </div>
            </div>
            <div class="footer-icon-container">
                <div class="footer-icon">
                    <a href="#link-to-instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="footer-icon">
                    <a href="#link-to-facebook"><i class="fa-brands fa-facebook-square"></i></a>
                </div>
                <div class="footer-icon">
                    <a href="#link-to-twitter"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>

        {{-- <div class="footer-content">
            <h2>Follow Us</h2>
            <div class="footer-icon-container">
                <div class="footer-icon">
                    <a href="#link-to-instagram"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="footer-icon">
                    <a href="#link-to-facebook"><i class="fa-brands fa-facebook-square"></i></a>
                </div>
                <div class="footer-icon">
                    <a href="#link-to-twitter"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
         --}}
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 All Rights Reserved - Kemal Yazid Fauzi</p>
    </div>
</footer>