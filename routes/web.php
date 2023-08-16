<?php

use App\Http\Controllers\sweets_namkeen;
use App\Http\Controllers\adminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\pdfController;
use App\Models\Order;
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


Route::get('/', function () {
    
         return view('/index');

 });

Route::get('/index',[sweets_namkeen::class,'indexFun'])->name('index');
Route::get('/Gallery',[sweets_namkeen::class,'galleryFun'])->name('gallery');

//users
Route::get('/signup',[sweets_namkeen::class,'signupFun'])->name('signup');
Route::get('/signin',[sweets_namkeen::class,'signinFun'])->name('signin');
Route::post('/store',[sweets_namkeen::class,'storeUser'])->name('store');
Route::post('/login',[sweets_namkeen::class,'login'])->name('login');


Route::get('/menu',[sweets_namkeen::class,'items'])->name('menu');
Route::get('/order/{id}',[OrderController::class,'order_user'])->name('orderuser');
Route::post('/storeorder',[OrderController::class,'storeorder'])->name('storeorder');
Route::put('/morder',[OrderController::class,'morder_user'])->name('morderuser');

//delivery
Route::get('/delivery',[OrderController::class,'deliver'])->name('delivery');

// Admin side rootes
Route::get('/admin',[adminController::class,'indexFun'])->name('admin');
Route::get('/order_manage',[adminController::class,'orderFun'])->name('orderadmin');

//manage items
Route::get('/item',[adminController::class,'itemFun'])->name('item');
Route::post('/storeproduct',[adminController::class,'storeproduct'])->name('storeproduct');
Route::get('/item_manage',[adminController::class,'item_manageFun'])->name('items_manage');
Route::get('/item/{id}',[adminController::class,'update_to'])->name('update_item');
Route::put('/update_from/{id}',[adminController::class,'update_from'])->name('update_from');
Route::get('/delete_item/{id}',[adminController::class,'delete_itemFun'])->name('delete_from');

Route::get('/user_manage',[adminController::class,'userFun'])->name('user');



Route::get('/logout',[adminController::class,'logoutFun']);

//pdf gentret
Route::get('/export_user_pdf',[pdfController::class,'export_user_pdf'])->name('export_user_pdf');
Route::get('/export_order_pdf',[pdfController::class,'export_order_pdf'])->name('export_order_pdf');
Route::get('/export_item_pdf',[pdfController::class,'export_item_pdf'])->name('export_item_pdf');

