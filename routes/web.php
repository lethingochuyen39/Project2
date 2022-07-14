<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

// Quân
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InsuranceController;

// long
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\BrandController;

//Tuan
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderDetailsController;

Route::get('/', function () {
    return view('welcome');
});


/*(-------ADMIN--------)*/
// dang nhap admin
Route::get('admin/login-admin',[AdminController::class,'login'])->name('admin.login');

Route::post('admin/post-login',[AdminController::class,'postLogin'])->name('admin.postLogin');

Route::get('admin/dashboard-admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::get('logout-admin',[AdminController::class,'logout'])->name('admin.logout');

Route::get('admin/dashboard1-admin',[AdminController::class,'dashboard1'])->name('admin.dashboard1');

Route::get('admin/dashboard2-admin',[AdminController::class,'dashboard2'])->name('admin.dashboard2');

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

// Quân
//news
Route::get('admin/news/index', [NewsController::class, 'index'])->name('admin.news.index');
Route::get('admin/news/create', [NewsController::class, 'create'])->name('admin.news.create');
Route::post('admin/news/postCreate', [NewsController::class, 'postCreate'])->name('admin.news.postCreate');
Route::get('admin/news/{news_id}/update', [NewsController::class, 'update'])->name('admin.news.update');
Route::post('admin/news/{news_id}/postUpdate', [NewsController::class, 'postUpdate'])->name('admin.news.postUpdate');
Route::get('admin/news/{news_id}/delete', [NewsController::class, 'delete'])->name('admin.news.delete');
Route::get('admin/news/{news_id}/details', [NewsController::class, 'details'])->name('admin.news.details');

//them sửa xóa admin
Route::get('admin/users/index', [UsersController::class, 'index'])->name('admin.users.index');
Route::get('admin/users/create', [UsersController::class, 'create'])->name('admin.users.create');
Route::post('admin/users/postCreate', [UsersController::class, 'postCreate'])->name('admin.users.postCreate');
Route::get('admin/users/{id}/update', [UsersController::class, 'update'])->name('admin.users.update');
Route::post('admin/users/{id}/postUpdate', [UsersController::class, 'postUpdate'])->name('admin.users.postUpdate');
Route::get('admin/users/{id}/delete', [UsersController::class, 'delete'])->name('admin.users.delete');
Route::get('admin/users/{id}/details', [UsersController::class, 'details'])->name('admin.users.details');


// Long
//product
Route::get('admin/product/index',[ProductController::class,'index'])->name('product.index');
Route::get('admin/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('admin/product/postCreate',[ProductController::class,'postCreate'])->name('product.postCreate');
Route::get('admin/product/{id}/update}',[ProductController::class,'update'])->name('product.update');
Route::post('admin/product/{id}/postUpdate',[ProductController::class,'postUpdate'])->name('product.postUpdate');
Route::get('admin/product/{id}/delete',[ProductController::class,'delete'])->name('product.delete');
Route::get('admin/product/{id}/details',[ProductController::class,'details'])->name('product.details');
//brand
Route::get('admin/brand/index',[BrandController::class,'index'])->name('brand.index');
Route::get('admin/brand/create',[BrandController::class,'create'])->name('brand.create');
Route::post('admin/brand/postCreate',[BrandController::class,'postCreate'])->name('brand.postCreate');
Route::get('admin/brand/{id}/update}',[BrandController::class,'update'])->name('brand.update');
Route::post('admin/brand/{id}/postUpdate',[BrandController::class,'postUpdate'])->name('brand.postUpdate');
Route::get('admin/brand/{id}/delete',[BrandController::class,'delete'])->name('brand.delete');
//productType
Route::get('admin/product_type/index',[ProductTypeController::class,'index'])->name('productType.index');
Route::get('admin/product_type/create',[ProductTypeController::class,'create'])->name('productType.create');
Route::post('admin/product_type/postCreate',[ProductTypeController::class,'postCreate'])->name('productType.postCreate');
Route::get('admin/product_type/{id}/update}',[ProductTypeController::class,'update'])->name('productType.update');
Route::post('admin/product_type/{id}/postUpdate',[ProductTypeController::class,'postUpdate'])->name('productType.postUpdate');
Route::get('admin/product_type/{id}/delete',[ProductTypeController::class,'delete'])->name('productType.delete');
// slider
Route::get('admin/slider/index',[SliderController::class,'index'])->name('slider.index');
Route::get('admin/slider/create',[SliderController::class,'create'])->name('slider.create');
Route::post('admin/slider/postCreate',[SliderController::class,'postCreate'])->name('slider.postCreate');
Route::get('admin/slider/{id}/update}',[SliderController::class,'update'])->name('slider.update');
Route::post('admin/slider/{id}/postUpdate',[SliderController::class,'postUpdate'])->name('slider.postUpdate');
Route::get('admin/slider/{id}/delete',[SliderController::class,'delete'])->name('slider.delete');
//promotion
Route::get('admin/promotion/index',[PromotionController::class,'index'])->name('promotion.index');
Route::get('admin/promotion/create',[PromotionController::class,'create'])->name('promotion.create');
Route::post('admin/promotion/postCreate',[PromotionController::class,'postCreate'])->name('promotion.postCreate');
Route::get('admin/promotion/{id}/update}',[PromotionController::class,'update'])->name('promotion.update');
Route::post('admin/promotion/{id}/postUpdate',[PromotionController::class,'postUpdate'])->name('promotion.postUpdate');
Route::get('admin/promotion/{id}/delete',[PromotionController::class,'delete'])->name('promotion.delete');
Route::get('admin/promotion/{id}/details',[PromotionController::class,'details'])->name('promotion.details');

//Tuan
//order
Route::get('admin/orders/index', [OrdersController::class, 'index'])->name('orders.index');
Route::get('admin/orders/{orders_id}/update', [OrdersController::class, 'update'])->name('orders.update');
Route::post('admin/orders/{orders_id}/postUpdate', [OrdersController::class, 'postUpdate'])->name('orders.postUpdate');
Route::get('admin/orders/{orders_id}/delete', [OrdersController::class, 'delete'])->name('orders.delete');
Route::get('admin/orders/{orders_id}/details', [OrdersController::class, 'details'])->name('orders.details');

//orderDetails
Route::get('admin/orderdetails/index', [OrderDetailsController::class, 'index'])->name('orderdetails.index');
Route::get('admin/orderdetails/{orderDetail_id}/update', [OrderDetailsController::class, 'update'])->name('orderdetails.update');
Route::post('admin/orderdetails/{orderDetail_id}/postUpdate', [OrderDetailsController::class, 'postUpdate'])->name('orderdetails.postUpdate');
Route::get('admin/orderdetails/{orderDetail_id}/delete', [OrderDetailsController::class, 'delete'])->name('orderdetails.delete');
Route::get('admin/orderdetails/{orderDetail_id}/details', [OrderDetailsController::class, 'details'])->name('orderdetails.details');

/*(-------ADMIN END--------)*/





/*(-------USER--------)*/
// custome (trang chủ), đăng ký , đăng nhập, thông tin
Route::get('user/pages/home',[CustomerController::class,'home'])->name('customer.home');

Route::get('user/register-user',[CustomerController::class,'register'])->name('customer.register');

Route::post('user/add',[CustomerController::class,'add'])->name('customer.add');

Route::get('user/logout',[CustomerController::class,'logout'])->name('customer.logout');

Route::get('user/login-user',[CustomerController::class,'login'])->name('customer.login');

Route::post('user/postlogin-user',[CustomerController::class,'postlogin'])->name('customer.postlogin');

Route::get('user/info-account',[CustomerController::class,'account'])->name('customer.account');

Route::post('user/update-user',[CustomerController::class,'update'])->name('customer.update');


// contact
Route::get('user/pages/contact',[CustomerController::class,'contact'])->name('customer.contact');

Route::post('user/post-Contact',[CustomerController::class,'postContact'])->name('customer.postContact');


// huong dan
//insurance-Quan
Route::get('user/pages/insurance', [InsuranceController::class, 'insurance'])->name('user.insurance');


// san pham-Long
Route::get('user/pages/product',[UserController::class,'product'])->name('user.product');
Route::get('user/pages/{product_id}/detailProduct',[UserController::class,'detailProduct'])->name('user.detailProduct');
Route::post('user/pages/siderBar',[UserController::class,'siderBar'])->name('user.siderBar');

/*(-------USER END--------)*/




