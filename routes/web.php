<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');




// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/bonjour', function () {
    return 'Hello world';
});

// Route::get('/personne', function () {
//     return [
//         'nom' => "DURAND",
//         'prenom' => "Olivier",
//         'age' => "21",
//     ];
// });