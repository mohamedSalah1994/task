<?php

use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
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

Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::post('/dir', [ArchivesController::class, 'dir'])->name('archives.dir');
Route::resource('archives', ArchivesController::class);

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
