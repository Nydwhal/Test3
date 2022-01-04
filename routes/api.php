<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route a entré dans Postman : Test3.test/api/contact (nomduprojet + . + test + chemin)
// Route::get('/contact',[ContactController::class,'index']);
// Route::post('/contact',[ContactController::class,'store']);
// Route::put('/contact/{id}',[ContactController::class,'update']);
// Route::delete('/contact/{id}',[ContactController::class,'destroy']);

Route::apiResource('contact', ContactController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
