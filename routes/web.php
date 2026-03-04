<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo "Home Page";
});
Route::get('/Product', function () {
    echo "Product Page";
});
Route::get('/Cart', function () {
    echo "Cart Page";
});

Route::get('/checkout', function () {
    echo "Checkout Page";
});
