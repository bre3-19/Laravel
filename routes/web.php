<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/prueba', function () {
    return "Hola";
})->middleware('auth');

/*
Route::get('/saludo/{name}', function ($name) {
    echo "Hola ".$name;
});

Route::get('/suma/{num1}/{num2}/{num3?}', function ($num1, $num2, $num3=0) {
    echo $num1 + $num2 + $num3;
})->where(['num1', '[0-9]+'],['num2', '[0-9]+'],['num3', '[0-9]+']);

Route::post('/suma/', function ($request) {

}); 
*/

Route::get('users/', [ UserController::class , 'index' ]);

Route::get('users/create', [ UserController::class , 'create' ]);

Route::get('users/{id}', [ UserController::class , 'show' ]);

Route::post('users/', [ UserController::class , 'store' ]);

Route::get('clients/', [ ClientController::class, 'index' ]);

Route::get('clients/create', [ ClientController::class , 'create' ]);

Route::get('clients/{id}', [ ClientController::class , 'show' ]);

Route::post('clients/', [ ClientController::class, 'store' ]);

Route::get('clients/update/{id}', [ ClientController::class, 'edit' ]);

Route::put('clients/', [ ClientController::class, 'update' ]);

Route::get('rooms/', [ RoomController::class, 'index' ]);

Route::get('rooms/{id}', [ RoomController::class , 'show' ]);

Route::get('reservations/', [ ReservationController::class, 'index' ]);

Route::get('reservations/{id}', [ ReservationController::class , 'show' ]);
