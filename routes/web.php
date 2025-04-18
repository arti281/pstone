<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     echo "hello wworld";exit;
// });

Route::get('/home',[HomeController::class,'index']);
Route::get('/aboutus',[HomeController::class,'about']);
Route::get('/radha-krishna-statues',[HomeController::class,'radha']);
Route::get('/hanumanji-statues',[HomeController::class,'hanumanji']);
Route::get('/durga-maa-stone-statues',[HomeController::class,'durga']);
Route::get('/human-stone-statues',[HomeController::class,'human']);
Route::get('/account',[HomeController::class,'account']);
Route::get('/wishlist',[HomeController::class,'wishlist']);
Route::get('/checkout',[HomeController::class,'checkout']);

//Registration
Route::get ('/login', function () {
    return view('login');
})->name('login');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('/registration',[UserController::class,'index']);
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post("/registration",[UserController::class,'register'])->name('user.register');

//for cart

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

// contact us
Route::get('/contactus', [ContactController::class, 'index'])->name('contact');
Route::post('/contactus', [ContactController::class, 'submit'])->name('contact.submit');

// for admin panel

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('admin/category',[CategoryController::class,'index']);
Route::get('admin/category/manage_category',[CategoryController::class,'manage_category']);
Route::get('admin/category/manage_category/{id}',[CategoryController::class,'manage_category']);
Route::post('admin/category/manage_category_process',[CategoryController::class,'manage_category_process'])->name('category.manage_category_process');
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);
Route::get('admin/category/status/{type}/{id}',[CategoryController::class,'status']);

Route::get('admin/coupon',[CouponController::class,'index']);
Route::get('admin/coupon/manage_coupon',[CouponController::class,'manage_coupon']);
Route::get('admin/coupon/manage_coupon/{id}',[CouponController::class,'manage_coupon']);
Route::post('admin/coupon/manage_coupon_process',[CouponController::class,'manage_coupon_process'])->name('coupon.manage_coupon_process');
Route::get('admin/coupon/delete/{id}',[CouponController::class,'delete']);
Route::get('admin/coupon/status/{type}/{id}',[CouponController::class,'status']);

Route::get('admin/size',[SizeController::class,'index']);
Route::get('admin/size/manage_size',[SizeController::class,'manage_size']);
Route::get('admin/size/manage_size/{id}',[SizeController::class,'manage_size']);
Route::post('admin/size/manage_size_process',[SizeController::class,'manage_size_process'])->name('size.manage_size_process');
Route::get('admin/size/delete/{id}',[SizeController::class,'delete']);
Route::get('admin/size/status/{type}/{id}',[SizeController::class,'status']);

Route::get('admin/color',[ColorController::class,'index']);
Route::get('admin/color/manage_color',[ColorController::class,'manage_color']);
Route::get('admin/color/manage_color/{id}',[ColorController::class,'manage_color']);
Route::post('admin/color/manage_color_process',[ColorController::class,'manage_color_process'])->name('color.manage_color_process');
Route::get('admin/color/delete/{id}',[ColorController::class,'delete']);
Route::get('admin/color/status/{type}/{id}',[ColorController::class,'status']);

Route::get('admin/product',[ProductController::class,'index']);
Route::get('admin/product/manage_product',[ProductController::class,'manage_product']);
Route::get('admin/product/manage_product/{id}',[ProductController::class,'manage_product']);
Route::get('admin/product/manage_product_process',[ProductController::class,'manage_product_process'])->name('product.manage_product_process');
Route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
Route::get('admin/product/product_attr_delete/{id}',[ProductController::class,'product_attr_delete/{paid}/{pid}']);
Route::get('admin/product/status/{type}/{id}',[ProductController::class,'status']);

Route::get('admin/logout', function () {
    session()->forget('ADMIN_LOGIN');
    session()->forget('ADMIN_ID');
    session()->flash('error','Logout Sucessful');
    return redirect('admin');
});
// Route::get('admin/updatepassword',[AdminController::class,'updatepassword']);
});