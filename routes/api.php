<?php

use Spatie\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\AddressController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



// PUBLIC ROUTES

Route::post( '/register', action: [AuthController::class, 'createUser']);
Route::post( '/login', action: [AuthController::class, 'loginUser']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

// });

// PROTECTED ROUTES

Route::group(['middleware'=>'auth:sanctum'],function(){

    Route::get('/menu', [MenuController::class, 'index']);
    Route::get('/menu/{id}', [MenuController::class, 'show']);


    Route::post('/cart/{menu}/{user_id}', [CartController::class, 'addCart'])->name('addCart');
    Route::get('/cart/{user}', [CartController::class, 'getCart'])->name('getcart');
    Route::post('/cart/update/{user}', [CartController::class, 'updateCart'])->name('cart.update');
    Route::get('/cart/delete/{cart}/{user}', [CartController::class, 'destroy'])->name('cart.delete');



    Route::post('/address', [AddressController::class, 'index']);
    Route::post('/address/store',[AddressController::class, 'store']);
    Route::post('/address/delete', [AddressController::class, 'destroy']);



    Route::post('/orders', [OrderController::class, 'create']);





    Route::post('/logout', [AuthController::class, 'logout']);

});
