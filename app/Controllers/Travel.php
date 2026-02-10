<?php

namespace App\Controllers;

class Travel extends BaseController
{
    public function explore(): string
    {
        $data = [
            'title' => 'Explore Destinations',
            'activePage' => 'explore',
            'destinations' => [
                ['id' => 1, 'name' => 'Bali', 'location' => 'Indonesia', 'price' => 2500000, 'rating' => 4.8, 'image' => 'dest-bali.svg'],
                ['id' => 2, 'name' => 'Raja Ampat', 'location' => 'Papua Barat', 'price' => 5000000, 'rating' => 4.9, 'image' => 'dest-raja-ampat.svg'],
                ['id' => 3, 'name' => 'Bromo', 'location' => 'Jawa Timur', 'price' => 1500000, 'rating' => 4.7, 'image' => 'dest-bromo.svg'],
                ['id' => 4, 'name' => 'Komodo Island', 'location' => 'NTT', 'price' => 4000000, 'rating' => 4.9, 'image' => 'dest-komodo.svg'],
            ]
        ];

        return view('pages/explore', $data);
    }

    public function destinationDetail($id): string
    {
        $data = [
            'title' => 'Destination Detail',
            'activePage' => 'explore',
            'destination' => [
                'id' => $id,
                'name' => 'Bali - Island of Gods',
                'location' => 'Indonesia',
                'description' => 'Bali adalah pulau wisata terkenal di Indonesia dengan pantai indah, budaya unik, dan pemandangan alam yang menakjubkan.',
                'price' => 2500000,
                'rating' => 4.8,
                'image' => 'dest-bali.svg',
                'gallery' => ['dest-bali.svg', 'dest-bali.svg', 'dest-bali.svg']
            ],
            'relatedPackages' => [
                ['id' => 1, 'name' => 'Bali 3D2N Honeymoon', 'price' => 3500000, 'duration' => '3 Hari 2 Malam'],
                ['id' => 2, 'name' => 'Bali Adventure Tour', 'price' => 4200000, 'duration' => '4 Hari 3 Malam'],
            ]
        ];

        return view('pages/destination_detail', $data);
    }

    public function packages(): string
    {
        $data = [
            'title' => 'Travel Packages',
            'activePage' => '',
            'packages' => [
                ['id' => 1, 'name' => 'Bali 3D2N Honeymoon', 'destination' => 'Bali', 'price' => 3500000, 'duration' => '3 Hari 2 Malam', 'rating' => 4.8],
                ['id' => 2, 'name' => 'Raja Ampat Diving', 'destination' => 'Raja Ampat', 'price' => 8000000, 'duration' => '5 Hari 4 Malam', 'rating' => 4.9],
                ['id' => 3, 'name' => 'Bromo Sunrise Tour', 'destination' => 'Bromo', 'price' => 1800000, 'duration' => '2 Hari 1 Malam', 'rating' => 4.7],
            ]
        ];

        return view('pages/packages', $data);
    }

    public function packageDetail($id): string
    {
        $data = [
            'title' => 'Package Detail',
            'activePage' => '',
            'package' => [
                'id' => $id,
                'name' => 'Bali 3D2N Honeymoon Package',
                'destination' => 'Bali',
                'price' => 3500000,
                'duration' => '3 Hari 2 Malam',
                'rating' => 4.8,
                'description' => 'Paket honeymoon romantis di Bali dengan akomodasi hotel bintang 5, candlelight dinner, dan tour ke tempat-tempat indah.',
                'itinerary' => [
                    'Day 1: Arrival - Check in Hotel - Welcome Dinner',
                    'Day 2: Tanah Lot Tour - Seminyak Beach - Candlelight Dinner',
                    'Day 3: Ubud Tour - Traditional Spa - Departure'
                ],
                'includes' => ['Hotel 5 Star', 'Breakfast', 'Tour Guide', 'Transportation']
            ]
        ];

        return view('pages/package_detail', $data);
    }

    public function bookingForm($packageId): string
    {
        $data = [
            'title' => 'Booking Form',
            'activePage' => '',
            'package' => [
                'id' => $packageId,
                'name' => 'Bali 3D2N Honeymoon Package',
                'price' => 3500000
            ]
        ];

        return view('pages/booking_form', $data);
    }

    public function checkout(): string
    {
        $data = [
            'title' => 'Checkout',
            'activePage' => '',
            'booking' => [
                'package' => 'Bali 3D2N Honeymoon Package',
                'date' => '2026-03-15',
                'guests' => 2,
                'total' => 7000000
            ]
        ];

        return view('pages/checkout', $data);
    }
}
