<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontdeskController;

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
    return view('website');
});

Route::get('/reserve' , [BookingStepsController::class , 'index'])->name('bookNow');
Route::post('/reservation/store' , [BookingStepsController::class , 'store'])->name('store');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

    //frontdesk routes
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 

    Route::get('/reservation' , [FrontdeskController::class , 'reservation'])->name('reservation');
    Route::get('/rates' , [FrontdeskController::class , 'rates'])->name('rates');




    
});

