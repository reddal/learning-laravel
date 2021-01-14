<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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


Route::get('/{user?}', function ($user = 'anonymous squirrel') {
    return view('base', ['name' => $user]);
});
/*Route::get('/user/{user}/edad/{edad}', function ($user, $edad) {
    return 'user '.$user.' edad '.$edad;
});*/
Route::get('/song/{id}', [SongController::class,'getSong']);

Route::post('/upload',[SongController::class,'insertSong']);

Route::redirect('/users', '/');
