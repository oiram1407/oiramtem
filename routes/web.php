<?php

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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('products-list', 'ProductsController@productsList')->name('products-list');
Route::get('contact-us', 'ContactController@index')->name('contact-us');
Route::post('contact-us', 'ContactController@setContact')->name('send-contact-us');

Route::prefix('admin')->group(function () {
    Route::get('/', 'admin\HomeController@home')->name('adminHome');
    Route::get('branch-list', 'admin\BranchController@branchList')->name('admBranchList');
    Route::get('categories-list', 'admin\CategoryController@categoryList')->name('admCategList');
    Route::get('contacts', 'ContactController@admContact')->name('admContact');
    Route::get('product-list', 'ProductsController@admProducts')->name('admProductList');
    //Modals para productos
    Route::get('add-product-form', 'ModalController@addProductForm');
    Route::post('add-product', 'ModalController@addProduct');
    Route::post('set-stock-form', 'ModalController@setStockForm');

});
