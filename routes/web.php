<?php

use App\Http\Controllers\DonorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\HospitalListController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/regisAction', [LoginController::class, 'regisAction']);

Route::group(['middleware' => ["auth"]], function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

    Route::get('penerima', [HospitalListController::class, 'penerima'])->name('penerima');
    Route::get('pendonor', [HospitalListController::class, 'pendonor'])->name('pendonor');

    Route::get('/donor/{id}', [DonorController::class, 'donor'])->name('donor');
    Route::post('/donorform', [DonorController::class, 'donorform'])->name('donorform');


    Route::get('request', [HospitalListController::class, 'create'])->name('blood.create');
    Route::post('/bloodReq',[HospitalListController::class, 'store'])->name('blood.store');

    Route::get('notification', [HospitalListController::class, 'notification'])->name('notification');

});
Route::group(['middleware' => ["Admin"]], function () {

    Route::get('/adminHome', [HospitalController::class, 'adminHome'])->name('adminHome');
    Route::get('/edit/{id}', [HospitalController::class, 'edit'])->name('edit');
    Route::post('/editform', [HospitalController::class, 'editform'])->name('editform');

});
