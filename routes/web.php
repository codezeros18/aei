<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

/*
Boiler & Power Plant
*/

Route::get('/bpp', function () {
    return view('pages.bpp');
});
Route::get('/fluidized', function () {
    return view('pages.fluidized');
});
Route::get('/cfbc', function () {
    return view('pages.cfbc');
});
Route::get('/cgb', function () {
    return view('pages.cgb');
});
Route::get('/rgb', function () {
    return view('pages.rgb');
});
Route::get('/gob', function () {
    return view('pages.gob');
});
Route::get('/tob', function () {
    return view('pages.tob');
});
Route::get('/pp', function () {
    return view('pages.pp');
});
Route::get('/bp', function () {
    return view('pages.bp');
});

/*
Engineering & Construction
*/

Route::get('/enco', function () {
    return view('pages.enco');
});
Route::get('/eng', function () {
    return view('pages.eng');
});
Route::get('/cons', function () {
    return view('pages.cons');
});

/*
Automation & IOT
*/

Route::get('/auot', function () {
    return view('pages.auot');
});
Route::get('/aut', function () {
    return view('pages.aut');
});
Route::get('/iot', function () {
    return view('pages.iot');
});

/*
Maintenance & Spareparts
*/

Route::get('/masp', function () {
    return view('pages.masp');
});
Route::get('/mase', function () {
    return view('pages.mase');
});
Route::get('/spar', function () {
    return view('pages.spar');
});

/*
About Us and Contact Us
*/

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});












