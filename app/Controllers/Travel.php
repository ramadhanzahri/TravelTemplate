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
                [
                    'id' => 1,
                    'name' => 'Bali',
                    'location' => 'Bali',
                    'price' => 2500000,
                    'rating' => 4.0,
                    'image' => 'dest-bali.svg'
                ],
                [
                    'id' => 2,
                    'name' => 'Raja Ampat',
                    'location' => 'Papua Barat',
                    'price' => 5000000,
                    'rating' => 4.9,
                    'image' => 'dest-raja-ampat.svg'
                ],
                [
                    'id' => 3,
                    'name' => 'Bromo',
                    'location' => 'Jawa Timur',
                    'price' => 1500000,
                    'rating' => 4.7,
                    'image' => 'dest-bromo.svg'
                ],
                [
                    'id' => 4,
                    'name' => 'Komodo Island',
                    'location' => 'NTT',
                    'price' => 4000000,
                    'rating' => 4.9,
                    'image' => 'dest-komodo.svg'
                ],
            ]
        ];
        return view('page/explore', $data);
    }

    public function destinationDetail($id): string
    {
        $data = [
            'title' => 'Destination Detail',
            'activePage' => 'explore',
            'destination' => [
                'id' => $id,
                'name' => 'Bali - Island of Gods',
                'location' => 'Bali, Indonesia',
                'description' => 'Bali adalah pulai wisata terkenal di Indonesia dengan pantai indah, budaya unik, dan pemandangan alam yang menakjubkan.',
                'price' => 2500000,
                'rating' => 4.8,
                'image' => 'dest-bali.svg',
                'gallery' => ['dest-bali.svg', 'dest-bali.svg', 'dest-bali.svg']
            ],
            'relatedPackages' => [
                [
                    'id' => 1,
                    'name' => 'Bali 3D2N Honeymoon',
                    'price' => 3500000,
                    'duration' => '3 Days 2 Nights',
                ],
                [
                    'id' => 2,
                    'name' => 'Bali Adventure Tour',
                    'price' => 4200000,
                    'duration' => '4 Days 3 Nights',
                ],
            ]
        ];
        return view('page/destination_detail', $data);
    }

    public function packages(): string
    {
        $data = [
            'title' => 'Travel Packages',
            'activePage' => '',
            'packages' => [
                [
                    'id' => 1,
                    'name' => 'Bali 3D2N Honeymoon',
                    'destination' => 'Bali',
                    'price' => 3500000,
                    'duration' => '3 Days 2 Nights',
                    'rating' => 4.8,
                ],
                [
                    'id' => 2,
                    'name' => 'Raja Ampat Diving',
                    'destination' => 'Raja Ampat',
                    'price' => 6000000,
                    'duration' => '5 Days 4 Nights',
                    'rating' => 4.9,
                ],
                [
                    'id' => 3,
                    'name' => 'Bromo Sunrise Tour',
                    'destination' => 'Bromo',
                    'price' => 1800000,
                    'duration' => '2 Days 1 Night',
                    'rating' => 4.7,
                ],
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
                'duration' => '3 Days 2 Nights',
                'rating' => 4.8,
                'description' => 'Paket honeymoon romantis di Bali dengan akomodasi hotel bontang 5, candlenight dinner, dan tour ke tempat-tempat indah.',
                'itinerary' => [
                    'Day 1: Arrival in Bali, Check In Hotel - Welcome Dinner',
                    'Day 2: Tanah Lot Tour - Seminyak Beach - Candlenight Dinner',
                    'Day 3: Ubud Tour - Tradisional Spa - Departure'
                ],
                'include' => ['Hotel 5 Star', 'Breakfast', 'Tour Guide', 'Transportation']
            ]
        ];
        return view('page/package_detail', $data);
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
        return view('page/booking_form', $data);
    }

    public function checkout(): string
    {
        $data = [
            'title' => 'Checkout',
            'activePage' => '',
            'booking' => [
                'package' => 'Bali 3D2N Honeymoon Package',
                'guests' => 2,
                'total' => 7000000
            ]
        ];
        return view('page/checkout', $data);
    }
}
