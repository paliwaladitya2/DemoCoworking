<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PropertyAdminController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Http\Controllers\SuperAdminController;
use App\Models\PropertyUsers;

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
    $blogs = Blog::latest()->take(3)->get();
    return view('mainweb/index-11',compact('blogs'));
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
Route::get('managereviews',[PropertyAdminController::class,'managereviews'])->name('managereviews');
Route::get('deletereviews',[PropertyAdminController::class,'deletereviews'])->name('deletereviews');
Route::get('manage-property',[PropertyAdminController::class,'index'])->name('manageproperty');
Route::get('editproperty/{id}',[PropertyAdminController::class,'editproperty'])->name('editproperty');
Route::post('updateproperty',[PropertyAdminController::class,'updateproperty'])->name('updateproperty');
Route::get('deleteproperty',[PropertyAdminController::class,'deleteproperty'])->name('deleteproperty');
Route::get('createit',[PropertyAdminController::class,'createit'])->name('createit');
Route::post('saveit',[PropertyAdminController::class,'saveit'])->name('saveit');

// property users
Route::get('manage-team&client',[PropertyUsers::class,'manage_team_client'])->name('manage-team-client');



// home
Route::get('add_properties',[HomeController::class,'add_properties'])->name('add_properties');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('contact-us',[HomeController::class,'contact_us'])->name('contact-us');
Route::get('blog-list',[HomeController::class,'blog_list'])->name('blog-list');
Route::get('blog-details/{slug}',[HomeController::class,'blog_details'])->name('blog-details');
Route::get('user-profile',[HomeController::class,'user_profile'])->name('user-profile');
Route::get('payment-method',[HomeController::class,'payment_method'])->name('payment-method');
Route::get('change-password',[HomeController::class,'change_password'])->name('change-password');
Route::get('single-property/{id}',[HomeController::class,'single_property'])->name('single-property');
Route::get('properties-details',[HomeController::class,'properties_details'])->name('properties-details');
Route::get('properties-grid',[HomeController::class,'properties_grid'])->name('properties-grid');
Route::post('save-general-query',[HomeController::class,'save_general_query'])->name('save-general-query');
Route::post('save-property',[HomeController::class,'save_property'])->name('save-property');
Route::post('save-comment',[HomeController::class,'savecomment'])->name('savecomment');
// reviews
Route::post('savereview',[HomeController::class,'savereview'])->name('savereview');

//blogcategory
Route::get('/manage_blog_category',[BlogCategoryController::class,'index'])->name('manage_blog_category');
Route::get('add_blog_category',[BlogCategoryController::class,'add_blog_category'])->name('add_blog_category');
Route::post('/save_blog_category',[BlogCategoryController::class,'save_blog_category'])->name('save_blog_category');
Route::get('/edit_blog_category/{id}',[BlogCategoryController::class,'edit_blog_category'])->name('edit_blog_category');
Route::post('/update_blog_category',[BlogCategoryController::class,'update_blog_category'])->name('update_blog_category');
Route::get('/delete_blog_category/{id}',[BlogCategoryController::class,'delete_blog_category'])->name('delete_blog_category');

//blogs
Route::get('/manage_blogs',[BlogController::class,'index'])->name('manage_blogs');
Route::get('add_blog',[BlogController::class,'add_blog'])->name('add_blog');
Route::post('/save_blog',[BlogController::class,'save_blog'])->name('save_blog');
Route::get('/edit_blog/{id}',[BlogController::class,'edit_blog'])->name('edit_blog');
Route::post('/update_blog',[BlogController::class,'update_blog'])->name('update_blog');
Route::get('/delete_blog/{id}',[BlogController::class,'delete_blog'])->name('delete_blog');
Route::get('/manage_comment/{id}',[BlogController::class,'manage_comment'])->name('manage_comment');
Route::get('/delete_comment/{id}',[BlogController::class,'delete_comment'])->name('delete_comment');

