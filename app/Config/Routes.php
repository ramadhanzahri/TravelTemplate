<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home & Main Page
$routes->get('/', 'Home::index');
$routes->get('explore', 'Travel::explore');
$routes->get('destination/(:num)', 'Travel::destinationDetail/$1');

// Package
$routes->get('packages', 'Travel::packages');
$routes->get('package/(:num)', 'Travel::packageDetail/$1');

// Booking
$routes->get('booking/(:num)', 'Travel::bookingForm/$1');
$routes->get('checkout', 'Travel::checkout');
$routes->get('my-bookings', 'User::myBookings');
$routes->get('booking-detail/(:num)', 'User::bookingDetail/$1');

// Menu
$routes->get('favourite', 'User::favourite');
$routes->get('profile', 'User::profile');
$routes->get('help', 'User::help');
