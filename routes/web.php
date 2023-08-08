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
Route::get('manage-unapproved-properties',[SuperAdminController::class,'manage_unapproved_properties'])->name('manage_unapproved_properties');
Route::get('assignadmin',[SuperAdminController::class , 'assignadmin'])->name('assignadmin');
Route::get('approve',[SuperAdminController::class , 'approve'])->name('approve');
Route::get('manage-approved-properties',[SuperAdminController::class,'manage_approved_properties'])->name('manage_approved_properties');

// property admin 
Route::get('manageuser_propertyadmin',[PropertyAdminController::class,'manageuser'])->name('manageuser_propertyadmin');
Route::get('changerole_propertyadmin',[PropertyAdminController::class , 'changerole'])->name('changerole_propertyadmin');
Route::get('issues',[PropertyAdminController::class, 'issues'])->name('issues');


// home
Route::get('add_properties',[HomeController::class,'add_properties'])->name('add_properties');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('contact-us',[HomeController::class,'contact_us'])->name('contact-us');
Route::get('blog-list',[HomeController::class,'blog_list'])->name('blog-list');
Route::get('blog-details',[HomeController::class,'blog_details'])->name('blog-details');
Route::get('user-profile',[HomeController::class,'user_profile'])->name('user-profile');
Route::get('payment-method',[HomeController::class,'payment_method'])->name('payment-method');
Route::get('change-password',[HomeController::class,'change_password'])->name('change-password');
Route::get('single-property/{id}',[HomeController::class,'single_property'])->name('single-property');
Route::get('properties-details',[HomeController::class,'properties_details'])->name('properties-details');
Route::get('properties-grid',[HomeController::class,'properties_grid'])->name('properties-grid');
Route::post('save-general-query',[HomeController::class,'save_general_query'])->name('save-general-query');
Route::post('save-property',[HomeController::class,'save_property'])->name('save-property');
