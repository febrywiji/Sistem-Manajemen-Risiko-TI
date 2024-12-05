<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RiskController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('adminHome');
    Route::get('/admin/home', [RiskController::class, 'index'])->name('adminHome');
    Route::get('/risks/create', [RiskController::class, 'create'])->name('risks.create');
    Route::post('/risks/store', [RiskController::class, 'store'])->name('risks.store');
    Route::post('/risks/{id}/edit', [RiskController::class, 'edit'])->name('risks.edit');
    Route::get('/risks/{id}', [RiskController::class, 'show'])->name('risks.show');

});

Route::resource('risks', RiskController::class);

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
