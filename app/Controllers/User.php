<?php

namespace App\Controllers;

class User extends BaseController
{
    public function myBookings(): string
    {
        $data = [
            'title' => 'My Bookings',
            'activePage' => 'my-bookings',
            'bookings' => [
                ['id' => 1, 'package' => 'Bali 3D2N Honeymoon', 'date' => '2026-03-15', 'status' => 'Confirmed', 'total' => 7000000],
                ['id' => 2, 'package' => 'Bromo Sunrise Tour', 'date' => '2026-04-10', 'status' => 'Pending', 'total' => 3600000],
            ]
        ];

        return view('pages/my_bookings', $data);
    }

    public function bookingDetail($id): string
    {
        $data = [
            'title' => 'Booking Detail',
            'activePage' => 'my-bookings',
            'booking' => [
                'id' => $id,
                'bookingCode' => 'TRV-2026-001',
                'package' => 'Bali 3D2N Honeymoon Package',
                'date' => '2026-03-15',
                'guests' => 2,
                'status' => 'Confirmed',
                'total' => 7000000,
                'customerName' => 'Michael',
                'customerEmail' => 'michael@example.com',
                'customerPhone' => '081234567890'
            ]
        ];

        return view('pages/booking_detail', $data);
    }

    public function favourite(): string
    {
        $data = [
            'title' => 'My Favourite',
            'activePage' => 'favourite',
            'favourites' => [
                ['id' => 1, 'name' => 'Bali', 'location' => 'Indonesia', 'price' => 2500000, 'rating' => 4.8, 'image' => 'dest-bali.jpg'],
                ['id' => 4, 'name' => 'Komodo Island', 'location' => 'NTT', 'price' => 4000000, 'rating' => 4.9, 'image' => 'dest-komodo.jpg'],
            ]
        ];

        return view('pages/favourite', $data);
    }

    public function profile(): string
    {
        $data = [
            'title' => 'My Profile',
            'activePage' => 'profile',
            'user' => [
                'name' => 'Michael',
                'email' => 'michael@example.com',
                'phone' => '081234567890',
                'address' => 'Jakarta, Indonesia',
                'memberSince' => '2025-01-15'
            ]
        ];

        return view('pages/profile', $data);
    }

    public function help(): string
    {
        $data = [
            'title' => 'Help & FAQ',
            'activePage' => 'help',
            'faqs' => [
                ['question' => 'Bagaimana cara melakukan booking?', 'answer' => 'Pilih destinasi atau paket yang Anda inginkan, klik tombol Book Now, isi formulir booking, dan lakukan pembayaran.'],
                ['question' => 'Apakah bisa reschedule booking?', 'answer' => 'Ya, Anda bisa melakukan reschedule maksimal 7 hari sebelum keberangkatan dengan menghubungi customer service kami.'],
                ['question' => 'Metode pembayaran apa saja yang tersedia?', 'answer' => 'Kami menerima pembayaran via transfer bank, e-wallet (GoPay, OVO, Dana), dan kartu kredit.'],
                ['question' => 'Apakah harga sudah termasuk asuransi?', 'answer' => 'Asuransi perjalanan bisa ditambahkan saat proses booking dengan biaya tambahan.'],
            ]
        ];

        return view('pages/help', $data);
    }
}
