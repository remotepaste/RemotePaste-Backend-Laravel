<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClipStoreController;
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
	if (Auth::check()) {
    	return view('dashboard');
	}
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/download', function () {
    return view('download');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

