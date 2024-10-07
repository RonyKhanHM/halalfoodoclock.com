<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class, 'index']);
Route::get('/product/details', [FrontendController::class, 'productDetails']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
Route::get('/checkout', [FrontendController::class, 'checkout']);
Route::get('/dishes', [FrontendController::class, 'dishes']);
Route::get('/special', [FrontendController::class, 'special']);
Route::get('/combo-offer', [FrontendController::class, 'comboOffer']);
Route::get('/table-book', [FrontendController::class, 'tableBook']);
Route::get('/menu', [FrontendController::class, 'menu']);

Auth::routes();

Route::get('/admin/login', [AuthController::class, 'adminLogin']);
