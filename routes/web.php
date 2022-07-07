<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

// admin

Route::get('admin/login-admin',[AdminController::class,'login'])->name('admin.login');


Route::post('admin/post-login',[AdminController::class,'postLogin'])->name('admin.postLogin');

Route::get('admin/dashboard-admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('logout-admin',[AdminController::class,'logout'])->name('admin.logout');

// khach hàng
Route::get('admin/customer',[AdminController::class,'customer'])->name('admin.customer');

Route::get('admin/{id}/show-customer',[AdminController::class,'showCustomer'])->name('admin.showCustomer');

Route::get('admin/{id}/edit-customer',[AdminController::class,'editCustomer'])->name('admin.editCustomer');

Route::post('admin/{id}/post-edit-customer',[AdminController::class,'postEditCustomer'])->name('admin.postEditCustomer');

Route::get('admin/{id}/delete-customer',[AdminController::class,'deleteCustomer'])->name('admin.deleteCustomer');

// bình luận
Route::get('admin/comment',[AdminController::class,'comment'])->name('admin.comment');

Route::get('admin/{id}/reply-comment',[AdminController::class,'replyComment'])->name('admin.replyComment');

Route::post('admin/{id}/post-reply-comment',[AdminController::class,'postReplyComment'])->name('admin.postReplyComment');

Route::get('admin/{id}/delete-comment',[AdminController::class,'deleteComment'])->name('admin.deleteComment');


// phản hồi
Route::get('admin/feedback',[AdminController::class,'feedback'])->name('admin.feedback');

Route::get('admin/{id}/show-feedback',[AdminController::class,'showFeedback'])->name('admin.showFeedback');

Route::get('admin/{id}/delete-feedback',[AdminController::class,'deleteFeedback'])->name('admin.deleteFeedback');



//user
Route::get('user/pages/home',[UserController::class,'home'])->name('user.home');

Route::get('user/register-user',[UserController::class,'register'])->name('user.register');

Route::post('user/add',[UserController::class,'add'])->name('user.add');

Route::get('user/logout',[UserController::class,'logout'])->name('user.logout');

Route::get('user/login-user',[UserController::class,'login'])->name('user.login');

Route::post('user/postlogin-user',[UserController::class,'postlogin'])->name('user.postlogin');

Route::get('user/info-account',[UserController::class,'account'])->name('user.account');

Route::post('user/update-user',[UserController::class,'update'])->name('user.update');
