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

Route::get('/', [\App\Http\Controllers\PagesController::class, 'index']);

Route::get('/about', function(){
    return view('about');
});


// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return 'This user is called ' . $name . ' and his id is ' . $id . '.';
// });

// Route::get('/', function()
// {
//    return View::make('pages.home');
// });
// Route::get('/register', function()
// {
//    return View::make('pages.register');
// });

// Route::get('/hello', function()
// {
//     return 'Hello World';
// });

