<?php

use App\Http\Controllers\AuthController;
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
    // PASS DATA WITH ROUTE
    $data = ['title' => 'Example Project', 'company_name' => 'Example Company', 'fav_icon' => 'https://cdn-icons-png.flaticon.com/512/5220/5220478.png', 'short_name' => 'EX', 'coprights' => '2024'];
    return view('home', $data);
});

Route::get('/empty', function () {
    return view('empty');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
