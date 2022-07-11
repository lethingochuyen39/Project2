<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

// admin
// dang nhap admin
Route::get('admin/login-admin',[AdminController::class,'login'])->name('admin.login');

Route::post('admin/post-login',[AdminController::class,'postLogin'])->name('admin.postLogin');

Route::get('admin/dashboard-admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('logout-admin',[AdminController::class,'logout'])->name('admin.logout');

//them sửa xóa admin
Route::get('admin/users/index', [UsersController::class, 'index'])->name('admin.users.index');
Route::get('admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');
Route::post('admin/users/postCreate', [UsersController::class, 'postCreate'])->name('admin.users.postCreate');
Route::get('admin/users/{id}/update', [UsersController::class, 'update'])->name('admin.users.update');
Route::post('admin/users/{id}/postUpdate', [UsersController::class, 'postUpdate'])->name('admin.users.postUpdate');
Route::get('admin/users/{id}/delete', [UsersController::class, 'delete'])->name('admin.users.delete');
Route::get('admin/users/{id}/details', [UsersController::class, 'details'])->name('admin.users.details');


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

//news
Route::get('admin/news/index', [NewsController::class, 'index'])->name('admin.news.index');
Route::get('admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
Route::post('admin/news/postCreate', [NewsController::class, 'postCreate'])->name('admin.news.postCreate');
Route::get('admin/news/{news_id}/update', [NewsController::class, 'update'])->name('admin.news.update');
Route::post('admin/news/{news_id}/postUpdate', [NewsController::class, 'postUpdate'])->name('admin.news.postUpdate');
Route::get('admin/news/{news_id}/delete', [NewsController::class, 'delete'])->name('admin.news.delete');
Route::get('admin/news/{news_id}/details', [NewsController::class, 'details'])->name('admin.news.details');







//user
// custome (trang chủ), đăng ký , đăng nhập, thông tin
Route::get('user/pages/home',[CustomerController::class,'home'])->name('customer.home');

Route::get('user/register-user',[CustomerController::class,'register'])->name('customer.register');

Route::post('user/add',[CustomerController::class,'add'])->name('customer.add');

Route::get('user/logout',[CustomerController::class,'logout'])->name('customer.logout');

Route::get('user/login-user',[CustomerController::class,'login'])->name('customer.login');

Route::post('user/postlogin-user',[CustomerController::class,'postlogin'])->name('customer.postlogin');

Route::get('user/info-account',[CustomerController::class,'account'])->name('customer.account');

Route::post('user/update-user',[CustomerController::class,'update'])->name('customer.update');



// liên hệ
Route::get('user/pages/contact',[CustomerController::class,'contact'])->name('customer.contact');

Route::post('user/post-Contact',[CustomerController::class,'post_contact'])->name('customer.postContact');



