<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tourcontroller;

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

Route::any('/admin/index',[tourcontroller::class,'admin_index']);

Route::any('/admin/dashboard',[tourcontroller::class,'dashboard'])->middleware('admin_login');

Route::any('/admin/add-slider',[tourcontroller::class,'add_slider'])->middleware('admin_login');
Route::any('/admin/view-slider',[tourcontroller::class,'view_slider'])->middleware('admin_login');
Route::any('/admin/view-slider/{id}',[tourcontroller::class,'delete_slider'])->middleware('admin_login');
Route::any('/admin/edit-slider/{id}',[tourcontroller::class,'edit_slider'])->middleware('admin_login');
Route::post('/admin/edit-slider/{id}',[tourcontroller::class,'submit_edit_slider'])->middleware('admin_login');

Route::any('/admin/add-package',[tourcontroller::class,'add_package'])->middleware('admin_login');
Route::any('/admin/view-package',[tourcontroller::class,'view_package'])->middleware('admin_login');
Route::any('/admin/view-detail-package/{id}',[tourcontroller::class,'view_detail_package'])->middleware('admin_login');
Route::any('/admin/edit-package/{id}',[tourcontroller::class,'edit_package'])->middleware('admin_login');
Route::post('/admin/edit-package/{id}',[tourcontroller::class,'edited_submit_package'])->middleware('admin_login');
Route::any('/admin/view-contacts',[tourcontroller::class,'view_contact'])->middleware('admin_login');

Route::any('/admin/view-booking',[tourcontroller::class,'view_booking'])->middleware('admin_login');
Route::any('/admin/view-detail-booking/{id}',[tourcontroller::class,'view_detail_booking'])->middleware('admin_login');
Route::any('/admin/edit-detail-booking/{id}',[tourcontroller::class,'edit_detail_booking'])->middleware('admin_login');
Route::post('/admin/edit-detail-booking/{id}',[tourcontroller::class,'s_edit_detail_booking'])->middleware('admin_login');

Route::any('/admin/all-trip',[tourcontroller::class,'all_trip'])->middleware('admin_login');
Route::any('/admin/all-detail-trip/{id}',[tourcontroller::class,'all_detail_trip'])->middleware('admin_login');
Route::any('/admin/edit-detail-trip/{id}',[tourcontroller::class,'edit_detail_trip'])->middleware('admin_login');
Route::post('/admin/edit-detail-trip/{id}',[tourcontroller::class,'s_edit_detail_trip'])->middleware('admin_login');

Route::any('/admin/log-out',[tourcontroller::class,'admin_logout']);


// Font-end
Route::any('/',[tourcontroller::class,'index']);
Route::post('/',[tourcontroller::class,'search_place']);
Route::any('/login',[tourcontroller::class,'user_login']);
Route::any('/register',[tourcontroller::class,'user_register']);
Route::any('/tour-list',[tourcontroller::class,'tour_list']);
Route::post('/tour-list',[tourcontroller::class,'search_place']);
Route::any('/tour-single/{id}',[tourcontroller::class,'tour_single']);
Route::post('/get_from_price',[tourcontroller::class,'get_from_price']);
Route::any('/international_tour',[tourcontroller::class,'international_tour']);
Route::any('/domestic_tour',[tourcontroller::class,'domestic_tour']);
Route::any('/edit_from_place',[tourcontroller::class,'edit_from_place']);
Route::any('/tour-booking/{id}',[tourcontroller::class,'tour_booking']);
Route::post('/tour-booking/{id}',[tourcontroller::class,'book_details']);
Route::any('/person_details',[tourcontroller::class,'person_details'])->middleware('user_login');
Route::any('/pay_now',[tourcontroller::class,'pay_now'])->middleware('user_login');
Route::any('/my_booking',[tourcontroller::class,'my_booking'])->middleware('user_login');
Route::any('/booked-single/{id}',[tourcontroller::class,'booked_single'])->middleware('user_login');
Route::any('/about',[tourcontroller::class,'about']);
Route::any('/contact-us',[tourcontroller::class,'contact_us']);



Route::any('/logout',[tourcontroller::class,'logout']);