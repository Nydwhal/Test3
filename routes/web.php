<?php

use Illuminate\Support\Facades\Route;
use app\Mail\Contact;
use app\Http\Requests\ContactRequest;

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

//route::get('url','nom_controller@nom_methode)

Route::get('/', 'WelcomeController@index')->name('home');

//Route::resource('photos','PhotoController');
//Route::resource('photos',PhotoController::class);

/**
 * Route::resource([
 *  'photos','PhotoController',
 *  ...
 * ])
 */


//Mettre les controlleurs de ressources avant les autres routes
//Route::apiResource('photosdeux', 'PhotoControllerDeux');

//Erreur 419 : 

Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'durand@chezlui.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
    ]);
 });


Route::get('/', function () {
    return view('welcome');
});
