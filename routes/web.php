<?php

use Illuminate\Support\Facades\Route;

// Define as rotas para as views
Route::get('/', function () {
    return view('index-2');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/case-details', function () {
    return view('case-details');
});

Route::get('/case', function () {
    return view('case');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/news-details', function () {
    return view('news-details');
});

Route::get('/news-grid', function () {
    return view('news-grid');
});

Route::get('/news-standard', function () {
    return view('news-standard');
});

Route::get('/services-details', function () {
    return view('services-details');
});

Route::get('/services', function () {
    return view('services');
});
