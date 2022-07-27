<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;


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

// *******##### Backend Route #####*******
Route::get('/admins', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'admin_logout']);

// *******##### Resource Route category #####*******
Route::resource('/categories/', CategoryController::class);
Route::get('/cat-status/{category}', [CategoryController::class, 'change_status']);
Route::get('/categories/{category}', [CategoryController::class, 'edit']);
Route::post('/categories/{category}', [CategoryController::class, 'update']);
Route::get('/categories/destroy/{category}', [CategoryController::class, 'destroy']);

// *******##### Resource Route subcategory #####*******
Route::resource('/sub-categories/', SubCategoryController::class);
Route::get('/sub-cat-status/{subcategory}', [SubCategoryController::class, 'change_status']);
Route::get('/sub-categories/{category}', [SubCategoryController::class, 'edit']);
Route::post('/sub-categories/{category}', [SubCategoryController::class, 'update']);
Route::get('/sub-categories/destroy/{category}', [SubCategoryController::class, 'destroy']);

// *******##### Resource Route brand #####*******
Route::resource('/brand/', BrandController::class);
Route::get('/brand-status/{brand}', [BrandController::class, 'change_status']);
Route::get('/brand/{brand}', [BrandController::class, 'edit']);
Route::post('/brand/{brand}', [BrandController::class, 'update']);
Route::get('/brand/destroy/{brand}', [BrandController::class, 'destroy']);

// *******##### Resource Route Unit #####*******
Route::resource('/unit/', UnitController::class);
Route::get('/unit-status/{unit}', [UnitController::class, 'change_status']);
Route::get('/unit/{unit}', [UnitController::class, 'edit']);
Route::post('/unit/{unit}', [UnitController::class, 'update']);
Route::get('/unit/destroy/{unit}', [UnitController::class, 'destroy']);

// *******##### Resource Route Size #####*******
Route::resource('/size/', SizeController::class);
Route::get('/size-status/{size}', [SizeController::class, 'change_status']);
Route::get('/size/{size}', [SizeController::class, 'edit']);
Route::post('/size/{size}', [SizeController::class, 'update']);
Route::get('/size/destroy/{size}', [SizeController::class, 'destroy']);

// *******##### Resource Route Size #####*******
Route::resource('/color/', ColorController::class);
Route::get('/color-status/{color}', [ColorController::class, 'change_status']);
Route::get('/color/{color}', [ColorController::class, 'edit']);
Route::post('/color/{color}', [ColorController::class, 'update']);
Route::get('/color/destroy/{color}', [ColorController::class, 'destroy']);

// *******##### Resource Route Product #####*******
Route::resource('/product/', ProductController::class);
Route::get('/product-status/{product}', [ProductController::class, 'change_status']);
Route::get('/product/{product}', [ProductController::class, 'edit']);
Route::post('/product/{product}', [ProductController::class, 'update']);
Route::get('/product/destroy/{product}', [ProductController::class, 'destroy']);

// *******##### Order Route mange #####*******
Route::get('manage-order/', [OrderController::class, 'manage_order']);
Route::get('view-order-details/{id}', [OrderController::class, 'view_order_details']);



// *******##### Frontend Route #####*******
// Route::get('/', function () {
//     return view('frontend.welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/view-details/{id}', [HomeController::class, 'view_details']);
Route::get('/product-by-category/{id}', [HomeController::class, 'product_by_category']);
Route::get('/product-by-subcategory/{id}', [HomeController::class, 'product_by_subcategory']);
Route::get('/product-by-brand/{id}', [HomeController::class, 'product_by_brand']);
Route::get('/search/', [HomeController::class, 'search']);

// Add to cart
Route::post('add-to-cart/',[CartController::class, 'add_to_cart']);
Route::get('cart-item-delete/{id}',[CartController::class, 'cart_item_delete']);

// Checkout page route
Route::get('checkout-page/',[CheckoutController::class, 'index']);
Route::get('login-check/',[CheckoutController::class, 'login_check']);

// Customer login registration
Route::post('customer-login/',[CustomerController::class, 'customer_login']);
Route::post('customer-registration/',[CustomerController::class, 'customer_registration']);
Route::get('customer-logout/',[CustomerController::class, 'customer_logout']);
Route::post('save-shipping-address/',[CheckoutController::class, 'save_shipping_address']);
Route::get('payment/',[CheckoutController::class, 'payment']);
Route::post('order-place/',[CheckoutController::class, 'order_place']);

