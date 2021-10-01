<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        'name' => 'Alessandro',
        'surname' => 'Merenda',
    ];
    // dump($data);
    return view('home', $data);
});


Route::get('/contact', function () {
    $data = [
        'contacts' => [
            'phone' => 'Telefono',
            'email' => 'email',
            'fax' => 'Fax',
            'social' => 'WhattApp',
        ],

    ];

    return view('contact', $data);
})->name('contact');
