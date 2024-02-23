<?php

use App\Http\Controllers\Controller2;
use App\Http\Controllers\info_Controller;
use App\Http\Controllers\InformationsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Profile_Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get("/", [LoginController::class, "show"])->name('login.show');
Route::get("/home", [UserController::class, "index"])->name('homepage');

Route::get("/login", [LoginController::class, "show"])->name('login.show');
Route::post("/login", [LoginController::class, "login"])->name('login');

Route::get("/logout", [LoginController::class, "logout"])->name('logout');

Route::resource('profile', Profile_Controller::class);

// Route::resource('post', info_Controller::class);

// Route::get("/", [InformationsController::class, "index"])->name('settings.index');
Route::get("/settings", [InformationsController::class, "index"])->name('settings.index');
Route::get("/settings/create/{id}", [InformationsController::class, "create"])->name('settings.create')->middleware('auth');
Route::post("/settings", [InformationsController::class, "store"])->name('settings.store');
Route::middleware('auth')->group(function(){
    Route::get("/settings/{id}", [InformationsController::class, "edit"])->name('settings.edit');
    Route::delete("/settings/{id}", [InformationsController::class, "destory"])->name('settings.delete');
    Route::get("/post", [InformationsController::class, "index_post"])->name('index.post');
    Route::get('export-excel', [UserController::class, 'export'])->name('export');
    Route::post('import-excel', [UserController::class, 'import'])->name('import');
    Route::get('pdf-excel', [LoginController::class, 'pdf'])->name('pdf');

});


