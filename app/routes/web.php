<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontdeskController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\UserController;








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
    return view('website/website');
});

// Route::get('/reserve' , [ReservationsController::class , 'index'])->name('booking');
// Route::post('/reservation/store' , [ReservationsController::class , 'store'])->name('store');


// Route::get('/reserve' , [ReservationsController::class , 'book'])->name('book');

Route::get('/data',[ReservationsController::class , 'index'])->name('data');
        //modal
    Route::post('/reservation/store',[ReservationsController::class , 'store'])->name('reservations.store');



// Route::get('/reserve' , [ReserveController::class , 'index'])->name('booking');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

    //frontdesk routes
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 



    //Routes for walk-in booking inside the PMS
    Route::post("activeguest.store" , [TransactionsController::class , 'store'])->name('activeguest.store');
    Route::get('/activeguest',[TransactionsController::class , 'activeguest'])->name('activeguest');
    Route::get('/customers' , [TransactionsController::class , 'customers'])->name('customers');



    //Routes for room sidebar inside the PMS
    Route::post("room.store" , [RoomController::class , 'store'])->name('room.store');
    Route::get('/room',[RoomController::class , 'room'])->name('room');


    //Routes for users sidebar inside the PMS
    Route::get('/users' , [UserController::class , 'displayUsers'])->name('users');





    // //Routes for room type sidebar inside the PMS
    // Route::post("roomtype.store" , [RoomTypeController::class , 'store'])->name('roomtype.store');
    // Route::get('/roomtype',[RoomTypeController::class , 'roomtype'])->name('roomtype');




    Route::get('roomtype' , [FrontdeskController::class , 'roomtype'])->name('roomtype');


    Route::post("getdata" , [FrontdeskController::class , 'getData'])->name('getdata');

    Route::post("getdata1" , [FrontdeskController::class , 'getData1'])->name('getData1');

    Route::get("getdata2" , [FrontdeskController::class , 'getData2'])->name('getData2');


    Route::get('/expireguest' , [FrontdeskController::class , 'expireguest'])->name('expireguest');
  


    Route::get('/roomstatus' , [FrontdeskController::class , 'roomstatus'])->name('roomstatus');
    // Route::get('/customers' , [FrontdeskController::class , 'customers'])->name('customers');
    // Route::get('/users' , [FrontdeskController::class , 'users'])->name('users');





    




    //ReservationsController routes

    

    // Route::put('/generate/update',[ReservationsController::class , 'update'])->name('update');
    // Route::put('/generate/remove',[ReservationsController::class , 'remove'])->name('remove');

    // Route::get('/generate/search',[ReservationsController::class , 'search'])->name('search');






    
});

