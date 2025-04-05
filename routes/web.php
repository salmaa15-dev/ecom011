<?php

use Illuminate\Support\Facades\Auth;
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
// , 'verify' => true
Auth::routes(['register'=> false]);

Route::get('/', 'ecommerceController@home')->name('home');
Route::get('about', 'ecommerceController@about')->name('about');
Route::get('services', 'ecommerceController@services')->name('services');
Route::get('contactez-nous', 'ecommerceController@contact')->name('contact');
Route::post('contact-us', 'ecommerceController@create')->name('create');
Route::get('brands', 'BrandController@categorys')->name('brands');
Route::get('sales', 'ShopController@sales')->name('sales');
Route::get('shop-{slug}', 'ShopController@detailsProduct')->name('details');
Route::get('brand-{productBycategory}', 'ShopController@productByCategory')->name('productByCategory');
Route::get('packs', 'ShopController@packs')->name('packs');
Route::get('cart-shopping', 'ecommerceController@cart')->name('cart');
Route::get('checkout', 'ecommerceController@checkout')->name('checkout');
Route::post('payment-with-paypal', 'CheckoutController@payment_with_paypal')->name('payment_with_paypal');
Route::post('payment-with-transfer', 'CheckoutController@payment_with_transfer')->name('payment_with_transfer');
Route::get('status', 'CheckoutController@status')->name('status');
Route::get('canceled', 'CheckoutController@canceled')->name('canceled');
Route::get('a-props-{page}', 'ecommerceController@page')->name('aprops');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    // , 'verified' 
    'middleware' => ['auth']], 
     function () {
         
    Route::get('dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::resource('categorys', 'CategoryController')->except('show');

    Route::get('products_removed', 'ProductController@products_removed')->name('products.products_removed');
    Route::get('products_restart-{id}', 'ProductController@product_restart')->name('products.products_restart');
    Route::resource('products', 'ProductController');
    
    Route::get('discount', 'ProductController@active_discount')->name('active.discount');
    Route::patch('discount', 'ProductController@discount')->name('discount');

    Route::resource('packs', 'PackController');
    Route::get('available_pack', 'PackController@available_pack')->name('active.available_pack');

    Route::get('contacts', 'ContactController@contacts')->name('contacts');
    Route::get('show-notification-{notification_id?}+{type?}', 'NotificationController@show_notification')->name('show_notification');
    Route::get('new_notifications', 'NotificationController@new_notifications')->name('new_notifications');
    Route::delete('notification-{id}', 'ContactController@destroy')->name('notification');
    Route::resource('countries', 'CountrieController');

    Route::get('customers', 'CustomerController@index')->name('customers');
    Route::get('order-{id}-{name}', 'CustomerController@orderByCustomer')->name('order');
    Route::delete('destroy_customer-{id}', 'CustomerController@destroy')->name('destroy_customer');

    Route::patch('change', 'CountrieController@change_etat')->name('change');
    Route::resource('settings', 'SettingSiteController')->except('show');
    Route::patch('drop.nav', 'SettingSiteController@dropLogoNav')->name('drop.nav');
    Route::patch('drop.footer', 'SettingSiteController@dropLogoFooter')->name('drop.footer');

    Route::resource('pages', 'PageController');

    Route::get('register', 'ChangePasswordController@register')->name('register');
    Route::post('register', 'ChangePasswordController@create')->name('user.create');

    Route::get('change-information', 'ChangePasswordController@changeInfoUser')->name('change.informations');
    Route::post('change-information', 'ChangePasswordController@changeInfoUserStore')->name('changeUser.info');

    Route::get('change-password', 'ChangePasswordController@index')->name('change.password');
    Route::post('change-password', 'ChangePasswordController@store')->name('change.password.user');
});


