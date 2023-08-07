<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyAdminController;

use App\Http\Controllers\SuperAdminController;
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

Route::get('/', function () {
    return view('mainweb/index-11');
})->name('index');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::post('saveregister',[LoginController::class,'saveregister'])->name('saveregister');
Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('logincheck',[LoginController::class,'logincheck'])->name('logincheck');
Route::get('dashboard',[LoginController::class,'dashboard'])->name('dashboard');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

// super admin
Route::get('manageuser',[SuperAdminController::class,'manageuser'])->name('manageuser_superadmin');
Route::get('changerole',[SuperAdminController::class , 'changerole'])->name('changerole');

// property admin 
Route::get('manageuser_propertyadmin',[PropertyAdminController::class,'manageuser'])->name('manageuser_propertyadmin');
Route::get('changerole_propertyadmin',[PropertyAdminController::class , 'changerole'])->name('changerole_propertyadmin');
Route::get('issues',[PropertyAdminController::class, 'issues'])->name('issues');


// home
Route::get('add_properties',[HomeController::class,'add_properties'])->name('add_properties');