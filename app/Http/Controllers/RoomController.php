<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $rooms = [
        [
            'id' => 1,
            'name' => 'Standard Room',
            'description' => 'The Standard Room, offers a comfortable and inviting space perfect for
            both leisure and business travelers. The room features a cozy queen-sized bed with premium
            linens, a modern en-suite bathroom complete with complimentary toiletries, and a flat-screen
            TV with a variety of channels for your entertainment.',
            'price' => 500000,
            'image' => 'standard-room.jpg'
        ],
        [
            'id' => 2,
            'name' => 'Superior Room',
            'description' => 'The Superior Room offers a luxurious stay with a king-sized bed, elegant
            en-suite bathroom, and a large flat-screen TV. Enjoy free high-speed Wi-Fi, a well-equipped
            work desk, and a fully stocked mini-bar. The chic decor and cozy seating area provide a
            stylish and comfortable atmosphere for your stay.',
            'price' => 750000,
            'image' => 'superior-room.jpg'
        ],
        [
            'id' => 3,
            'name' => 'Luxury Room',
            'description' => 'The Luxury Room offers an exquisite experience with a spacious layout and
            refined decor. It features a plush king-sized bed, a lavish en-suite bathroom with a soaking
            tub and premium toiletries, and a large flat-screen TV. Guests can enjoy complimentary
            high-speed Wi-Fi, a sophisticated work desk, and an extensive mini-bar. The room
            elegant furnishings and exclusive amenities, including a private balcony with stunning views,
            ensure an unforgettable stay.',
            'price' => 1000000,
            'image' => 'luxury-room.jpg',
        ],
        [
            'id' => 4,
            'name' => 'Junior Suite Room',
            'description' => 'The Junior Suite Room combines elegance and comfort with its spacious
            layout and upscale amenities. It features a luxurious king-sized bed, a stylish living area
            with a comfortable sofa, and a modern en-suite bathroom with premium toiletries.
            Guests can enjoy complimentary high-speed Wi-Fi, a large flat-screen TV, a well-equipped
            work desk, and a fully stocked mini-bar. The room sophisticated decor and thoughtful
            touches ensure a relaxing and indulgent stay.',
            'price' => 1500000,
            'image' => 'junior-suite-room.jpg',
        ],
        [
            'id' => 5,
            'name' => 'Deluxe Suite Room',
            'description' => 'The Deluxe Suite Room offers a blend of luxury and sophistication,
            perfect for discerning travelers. This spacious suite features a king-sized bed with
            premium linens, a separate living area with elegant furnishings, and a lavish en-suite
            bathroom equipped with a soaking tub and high-end toiletries. Guests can enjoy complimentary
            high-speed Wi-Fi, a large flat-screen TV, a well-appointed work desk, and a fully stocked
            mini-bar. The refined decor and exclusive amenities, including a private balcony with
            stunning views, ensure an exceptional and memorable stay.',
            'price' => 2000000,
            'image' => 'deluxe-suite-room.jpg',
        ],
        [
            'id' => 6,
            'name' => 'Presidential Suite Room',
            'description' => 'The Presidential Suite Room epitomizes luxury and grandeur, designed
            for guests seeking the ultimate in comfort and elegance. This expansive suite features
            a magnificent king-sized bed with the finest linens, a spacious living and dining area
            with sophisticated furnishings, and a lavish en-suite bathroom complete with a Jacuzzi
            and premium toiletries. Guests can enjoy complimentary high-speed Wi-Fi, multiple large
            flat-screen TVs, a fully equipped work desk, and an extensive mini-bar. Additional
            exclusive amenities include a private terrace with breathtaking views, personalized
            concierge services, and access to a private lounge, ensuring an unparalleled and
            unforgettable stay.',
            'price' => 3000000,
            'image' => 'presidential-suite-room.jpg',
        ]
    ];

    public function index()
    {
        return view('layout.pages.rooms', ['rooms' => $this->rooms]);
    }

    public function show($id){
        $room = collect($this->rooms)->firstWhere('id', $id);

        if ($room) {
            return view('layout.pages.roomDetail', ['room' => $room]);
        } else {
            return redirect()->route('home');
        }
    }
}
