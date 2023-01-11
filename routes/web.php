<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\admin\AdminShopController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\admin\adminfrontendcontroller;
use App\Http\Controllers\Frontend\FrontendProductController;

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

Route::get('/', [adminfrontendcontroller::class, 'homepage']);

Auth::routes();

Route::get('/load-cart-data', [CartController::class, 'cartcount']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 /* ---------------------------------- Customer ---------------------------------------- */
Route::get('/home2', [adminfrontendcontroller::class, 'customer']);

/* -----product details ------ */
Route::get('/product-details/{id}', [adminfrontendcontroller::class, 'productdetails']);
/* -----Shop details ------ */
Route::get('/shop-details/{id}', [adminfrontendcontroller::class, 'shopdetails']);
/* -----Add to cart ------ */
Route::POST('/add-to-cart', [CartController::class, 'addtocart']);
/* -----Delete item cart ------ */
Route::POST('/delete-cart-item', [CartController::class, 'deleteproduct']);
/* -----Update item cart ------ */
Route::POST('/update-cart', [CartController::class, 'updatecart']);

Route::get('/add-to-cart2/{id}', [UserController::class, 'addtocart2']);

Route::get('product-shop/{id}',[FrontendProductController::class, 'shopproduct']);

Route::get('shop-product-category/{id}/{category}',[FrontendProductController::class, 'categoryshop']);

Route::post('product-shop-search/{id}', [FrontendProductController::class, 'searchproductshop']);

Route::get('/frontend-product',[FrontendProductController::class, 'frontendproduct']);

Route::get('product-category/{category}',[FrontendProductController::class, 'categoryproduct']);

Route::post('product-search/', [FrontendProductController::class, 'searchproduct']);

Route::middleware(['auth'])->group(function() {
  Route::get('cart', [CartController::class, 'viewcart']);
  Route::get('checkout', [CheckoutController::class, 'index']);
  Route::post('place-order', [CheckoutController::class, 'placeorder']);

  Route::get('success',[CheckoutController::class, 'success']);

  Route::get('my-orders',[UserController::class, 'index']);
  Route::get('view-order/{id}',[UserController::class, 'view']);

  Route::get('profile',[UserController::class, 'indexprofile']);
  Route::put('edit-profile',[UserController::class, 'editprofile']);

});


Route::middleware(['auth', 'isVendor'])->group(function() {
     /* ---------------------------------- Admin ---------------------------------------- */
    /* ----- main page admin ------ */
    Route::get('/dashboard',[DashboardController::class, 'index']);
    /* ----- shop page admin ------ */
    Route::get('/shop', 'admin\AdminShopController@index');
    /* ----- shop create form page admin ------ */
    Route::get('/add-shop', 'admin\AdminShopController@add');
    /* ----- shop create page admin ------ */
    Route::post('/create-shop', 'admin\AdminShopController@createshop');
     /* ----- shop edit form page admin ------ */
    Route::get('/edit-shop/{id}',[AdminShopController::class, 'edit']);
    /* ----- shop edit page admin ------ */
    Route::put('/edited-shop/{id}',[AdminShopController::class, 'editshop']);
    /* ----- shop delete page admin ------ */
    Route::get('/delete-shop/{id}',[AdminShopController::class, 'deleteshop']);

    Route::get('/details-shop/{id}',[AdminShopController::class, 'detailsShop']);

    /* ----- product page admin ------ */
    Route::get('/product',[AdminProductController::class, 'index']);
    /* ----- product create  form page admin ------ */
    Route::get('/add-product',[AdminProductController::class, 'add']);
     /* ----- product create page admin ------ */
     Route::post('/create-product',[AdminProductController::class, 'createproduct']);
       /* ----- Product edit form page admin ------ */
    Route::get('/edit-product/{id}',[AdminProductController::class, 'edit']);
    /* ----- Product edit page admin ------ */
    Route::put('/edited-product/{id}',[AdminProductController::class, 'editproduct']);
    /* ----- Product delete page admin ------ */
    Route::get('/delete-product/{id}',[AdminProductController::class, 'deleteproduct']);

    Route::get('/details-product/{id}',[AdminProductController::class, 'detailsProduct']);

    Route::post('admin-search/{id}', [AdminProductController::class, 'searchadmin']);

     /* ----- Order page admin ------ */
     Route::get('/order',[OrderController::class, 'index']);
     /* ----- order view page admin ------ */
     Route::get('admin-view-order/{id}',[OrderController::class, 'vieworder']);
     /* ----- update order page admin ------ */
     Route::put('update-order/{id}', [OrderController::class, 'updateorder']);

    /* ----- history order page admin ------ */
    Route::get('/order-history', [OrderController::class, 'orderhistory']);
    /* ----- history view order page admin ------ */
    Route::get('view-order-history/{id}', [OrderController::class, 'orderhistoryview']);

  

    
    


    


    });
