<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home - Travel Booking',
            'activePage' => 'home',
            'destinations' => [
                ['id' => 1, 'name' => 'Bali', 'location' => 'Indonesia', 'price' => 2500000, 'rating' => 4.8, 'image' => 'dest-bali.svg'],
                ['id' => 2, 'name' => 'Raja Ampat', 'location' => 'Papua Barat', 'price' => 5000000, 'rating' => 4.9, 'image' => 'dest-raja-ampat.svg'],
                ['id' => 3, 'name' => 'Bromo', 'location' => 'Jawa Timur', 'price' => 1500000, 'rating' => 4.7, 'image' => 'dest-bromo.svg'],
                ['id' => 4, 'name' => 'Komodo Island', 'location' => 'NTT', 'price' => 4000000, 'rating' => 4.9, 'image' => 'dest-komodo.svg'],
            ]
        ];

        return view('pages/home', $data);
    }
}
