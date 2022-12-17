<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Wishlist;
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
//HOME
Route::get('/',[HomeController::class,'index']);

//ADMIN
Route::get('/admin',[AdminController::class,'index']);
Route::get('/dashboard',[AdminController::class,'show_dashboard']);
Route::get('/logout',[AdminController::class,'logout']);
Route::post('/admin-dashboard',[AdminController::class,'dashboard']);

//AUTHENTICATION ADMIN
Route::get('/register-auth',[AuthController::class,'register_auth']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/login-auth',[AuthController::class,'login_auth']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/logout-auth',[AuthController::class,'logout_auth']);


//USER
Route::get('/user',[UserController::class,'index'])->middleware('auth.role');
Route::get('/add-user',[UserController::class,'add_user'])->middleware('auth.role');
Route::post('/save-user',[UserController::class,'save_user'])->middleware('auth.role');
Route::post('/assign-role',[UserController::class,'assign_role'])->middleware('auth.role');


//MANAGE-CLIENT-CUSTOMER-DASHBOARD
Route::get('/manage-customer',[CustomerController::class,'manage_customer']);

//CATEGORY
// ROUTE::group(['middleware'=>'auth.role'],function(){

Route::get('/add-category',[CategoryController::class,'add_category']);
Route::get('/all-category',[CategoryController::class,'all_category']);
Route::post('/save-category',[CategoryController::class,'save_category']);

Route::get('/unactive-category-product/{category_product_id}',[CategoryController::class,'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}',[CategoryController::class,'active_category_product']);

Route::get('/edit-category/{category_product_id}',[CategoryController::class,'edit_category']);
Route::post('/update-category/{category_product_id}',[CategoryController::class,'update_category']);

Route::get('/delete-category/{category_product_id}',[CategoryController::class,'delete_category']);
//BRAND
Route::get('/add-brand',[BrandController::class,'add_brand']);
Route::get('/all-brand',[BrandController::class,'all_brand']);
Route::post('/save-brand',[BrandController::class,'save_brand']);

Route::get('/unactive-brand-product/{brand_product_id}',[BrandController::class,'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}',[BrandController::class,'active_brand_product']);

Route::get('/edit-brand/{brand_product_id}',[BrandController::class,'edit_brand']);
Route::post('/update-brand/{brand_product_id}',[BrandController::class,'update_brand']);

Route::get('/delete-brand/{brand_product_id}',[BrandController::class,'delete_brand']);
//PRODUCT
Route::get('/add-product',[ProductController::class,'add_product']);
Route::get('/all-product',[ProductController::class,'all_product']);
Route::get('/all-product-price',[ProductController::class,'all_product_price']);

Route::get('/edit-product/{product_id}',[ProductController::class,'edit_product']);
Route::get('/delete-product/{product_id}',[ProductController::class,'delete_product']);

Route::get('/unactive-product/{product_id}',[ProductController::class,'unactive_product']);
Route::get('/active-product/{product_id}',[ProductController::class,'active_product']);

Route::post('/save-product',[ProductController::class,'save_product']);
Route::post('/update-product/{product_id}',[ProductController::class,'update_product']);

//GALLERY PRODUCT
Route::get('/add-gallery/{product_id}',[GalleryController::class,'add_gallery']);
Route::post('/select-gallery',[GalleryController::class,'select_gallery']);
Route::post('/insert-gallery/{product_id}',[GalleryController::class,'insert_gallery']);
Route::post('/update-gallery-name',[GalleryController::class,'update_gallery_name']);
Route::post('/del-gallery',[GalleryController::class,'delete_gallery']);
Route::post('/update-gallery-img',[GalleryController::class,'update_gallery_image']);
//DETAILS
Route::get('/chi-tiet-san-pham/{product_id}',[ProductController::class,'detail_product']);


//SHOP
Route::get('/shop',[HomeController::class,'shop']);
// Danh muc san pham va trang chu
Route::get('/danh-muc-san-pham/{category_id}',[CategoryController::class,'show_category_home']);
// Thuong hieu san pham va trang chu
Route::get('/thuong-hieu-san-pham/{brand_id}',[BrandController::class,'show_brand_home']);

//SEARCH

Route::post('/tim-kiem',[HomeController::class,'search']);
Route::post('/autocomplete-ajax',[HomeController::class,'autocomplete_ajax']);


//CART
Route::post('/save-cart',[CartController::class,'save_cart']);
Route::get('/show-cart',[CartController::class,'show_cart']);
Route::get('/delete-cart/{rowId}',[CartController::class,'delete_cart']);
Route::post('/update-cart-quantity',[CartController::class,'update_cart_quantity']);
//AJAX
Route::post('/add-cart-ajax',[CartController::class,'add_cart_ajax']);
Route::post('/update-cart',[CartController::class,'update_cart']);
Route::get('/gio-hang',[CartController::class,'gio_hang']);
Route::get('/del-product/{product_id}',[CartController::class,'delete_product']);
Route::get('/del-all-product',[CartController::class,'delete_all_product']);


Route::post('/add-cart-db/{customer_id}',[CartController::class,'add_cart_db']);
//COUPON 
Route::post('/check-coupon',[CartController::class,'check_coupon']);
Route::get('/unset-coupon',[CouponController::class,'unset_coupon']);
Route::get('/insert-coupon',[CouponController::class,'insert_coupon']);
Route::get('/delete-coupon/{coupon_id}',[CouponController::class,'delete_coupon']);
Route::get('/list-coupon',[CouponController::class,'list_coupon']);
Route::post('/insert-coupon-code',[CouponController::class,'insert_coupon_code']);

// CHECKOUT


Route::get('/checkout',[CheckoutController::class,'checkout']);
Route::get('/payment',[CheckoutController::class,'payment']);
Route::post('/save-checkout-customer',[CheckoutController::class,'save_checkout_customer']);
Route::post('/order-place',[CheckoutController::class,'order_place']);
Route::post('/select-delivery-home',[CheckoutController::class,'select_delivery_home']);
Route::post('/calculate-fee',[CheckoutController::class,'calculate_fee']);
Route::post('/confirm-order',[CheckoutController::class,'confirm_order']);


Route::get('/print-order/{checkout_code}',[OrderController::class,'print_order']);
Route::get('/manage-order',[OrderController::class,'manage_order']);
Route::get('/view-order/{order_code}',[OrderController::class,'view_order']);
Route::post('/update-order-qty',[OrderController::class,'update_order_qty'])->name('update-order-qty');
Route::post('/update-qty',[OrderController::class,'update_qty']);
Route::get('/delete-order/{order_code}',[OrderController::class,'delete_order']);

//SEND MAIL
Route::get('/send-mail',[HomeController::class,'send_mail']);

//Login  google
Route::get('/login-google',[HomeController::class],'login_google');
Route::get('/google/callback',[HomeController::class],'callback_google');

//EDIT PROFILE ADMIN
Route::get('/edit-profile/{admin_id}',[AdminController::class,'edit_profile']);
Route::post('/save-profile-ad/{profile_id}',[AdminController::class,'save_profile_ad']);
Route::get('/view-profile-ad/{profile_id}',[AdminController::class,'view_profile_ad']);

//DELIVERY
Route::get('/delivery',[DeliveryController::class,'delivery']);
Route::post('/select-delivery',[DeliveryController::class,'select_delivery'])-> name('select-delivery');
Route::post('/insert-delivery',[DeliveryController::class,'insert_delivery']);
Route::post('/select-feeship',[DeliveryController::class,'select_feeship']);
Route::post('/update-delivery',[DeliveryController::class,'update_delivery']);



//BLOG-ADMIN
Route::get('/all-blog',[BlogsController::class,'all_blog']);
Route::get('/add-blog',[BlogsController::class,'add_new_blog']);
Route::post('/save-blog',[BlogsController::class,'save_blog']);
Route::get('/edit-blog/{blog_id}',[BlogsController::class,'edit_blog']);
Route::post('/update-blog/{blog_id}',[BlogsController::class,'update_blog']);
Route::get('/delete-blog/{blog_id}',[BlogsController::class,'edit_blog']);
//BLOG-WEB
Route::get('/blog-list',[BlogsController::class,'blog_list']);
Route::get('/blog-detail/{blog_id}',[BlogsController::class,'blog_detail']);

//BANNER
Route::get('/manage-slider',[SliderController::class,'manage_slider']);
Route::get('/add-slider',[SliderController::class,'add_slider']);
Route::post('/insert-slider',[SliderController::class,'insert_slider']);
Route::get('/unactive-slide/{slide_id}',[SliderController::class,'unactive_slide']);
Route::get('/active-slide/{slide_id}',[SliderController::class,'active_slide']);
Route::get('/delete-slider/{slide_id}',[SliderController::class,'delete_slider']);

Route::get('/wishlist',[HomeController::class,'wishlist']);


//login lient
Route::get('/login-client',[LoginController::class,'login_client']);
Route::get('/register-client',[LoginController::class,'register_client']);
Route::post('/add-customer',[LoginController::class,'add_customer']);
Route::get('/logout',[LoginController::class,'logout_client']);
Route::post('/login-customer',[LoginController::class,'login_customer']);
Route::get('/client-login',[AdminController::class,'client_login']);
Route::get('/manage-profile-client/{customer_id}',[LoginController::class,'view_profile']);
Route::post('/update-infor-profile-client/{customer_id}',[LoginController::class,'update_infor_client']);
Route::post('/update-avatar-profile-client/{customer_id}',[LoginController::class,'update_avatar_client']);
Route::post('/update-password-profile-client/{customer_id}',[LoginController::class,'update_password_client']);
Route::get('/manage-puchase-order/{customer_id}',[OrderController::class,'manage_puchase_order']);
Route::get('/view-detail-history/{order_code}',[OrderController::class,'view_detail_history']);
//PR0FILE CLIENT

//SETTING LAYOUT

Route::get('/setting-home',[AdminController::class,'setting_home']); 

Route::get('/wishlist',[HomeController::class,'wishlist']);        

//SEND MAIL VOUCHER
Route::get('/send-coupon',[MailController::class,'send_coupon']); 
Route::get('/mail-coupon',[MailController::class,'mail_example']); 

//FORGET PASS
Route::get('/forget-pass',[MailController::class,'forget_password']); 
Route::post('/send-mail-pass',[MailController::class,'send_password']);
Route::get('/update-new-pass',[MailController::class,'update_new_password']); 
Route::post('/reset-new-pass',[MailController::class,'reset_new_password']); 