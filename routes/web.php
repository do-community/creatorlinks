<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UserPage\Show as UserPage;
use App\Http\Livewire\Links\Show as Links;
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

Route::get('/user/{user}', UserPage::class);

Route::get('/', function () {
    return view('index');
});

Route::middleware([ 'auth:sanctum', 'verified' ])->get('/dashboard/links',  function () {
    return view('livewire.links.show');
})->name('links');

Route::middleware([ 'auth:sanctum', 'verified' ])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

