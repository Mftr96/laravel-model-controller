<?php

use Illuminate\Support\Facades\Route;
//devo aggiungere PageController sennò da errore undefined type 
use App\Http\Controllers\Guest\PageController;

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



//richiamo la rotta home tramite PageController
Route::get('/',[PageController::class,"home"])->name("home");


// Route::get('/path', [PageController::class, "metodo"])->name("nomerotta");

