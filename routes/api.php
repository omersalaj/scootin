<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ScooterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Set api version to v1
Route::prefix('v1')->group(function () {

    // Registration routes
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);

    // Public routes
    Route::get('/scooters/search/{name}', [ScooterController::class, 'search']);
    Route::post('/scooters/is-in-area', [ScooterController::class, 'inArea']);
    Route::get('/scooters', [ScooterController::class, 'index']);
    Route::get('/scooters/{id}', [ScooterController::class, 'show']);


    // Protected routes
    Route::middleware('auth:api')->group(
        function () {

            Route::post('/scooters', [ScooterController::class, 'store']);
            Route::put('/scooters/{id}', [ScooterController::class, 'update']);
            Route::delete('/scooters/{id}', [ScooterController::class, 'destroy']);

            Route::get('/user', [AuthController::class, 'whoami']);
        }
    );

});



