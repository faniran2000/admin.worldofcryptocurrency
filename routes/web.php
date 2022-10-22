<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\WithdrawalController;
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

Route::get('/', [UserController::class, "index"])->name('home')->middleware("auth");
Route::get('/index', [UserController::class, "index"])->name('home')->middleware("auth");
Route::get('/home', [UserController::class, "index"])->name('home')->middleware("auth");
Route::get('/profile', [UserController::class, "profile"])->name('profile')->middleware("auth");
Route::get('/logout', [UserController::class, "logout"])->name('logout')->middleware("auth");

Route::get('/login', [UserController::class, "login"])->name('login')->middleware("guest");
Route::post('/auth/login', [UserController::class, "postLogin"])->name('post.login')->middleware("guest");

Route::get('/admins', [AdminController::class, "index"])->name("admins")->middleware("auth");
Route::get('/admin/new', [AdminController::class, "new"])->name("admin.new")->middleware("auth");
Route::get('/admin/view/{id}', [AdminController::class, "view"])->name("admin.view")->middleware("auth");
Route::get('/admin/delete/{id}', [AdminController::class, "delete"])->name("admin.delete")->middleware("auth");
Route::post('/admin/add', [AdminController::class, "postNew"])->name("post.new.admin")->middleware("auth");
Route::post('/admin/edit', [AdminController::class, "postEdit"])->name("post.edit.admin")->middleware("auth");

Route::get('/products', [ProductController::class, "index"])->name("products")->middleware("auth");
Route::get('/product/view/{id}', [ProductController::class, "view"])->name("product.view")->middleware("auth");
Route::get('/product/delete/{id}', [ProductController::class, "delete"])->name("product.delete")->middleware("auth");
Route::post('/product/edit', [ProductController::class, "postEdit"])->name("post.edit.product")->middleware("auth");

Route::get('/vendors', [VendorController::class, "index"])->name("vendors")->middleware("auth");
Route::get('/vendor/view/{id}', [VendorController::class, "view"])->name("vendor.view")->middleware("auth");
Route::get('/vendor/delete/{id}', [VendorController::class, "delete"])->name("vendor.delete")->middleware("auth");
Route::post('/vendor/edit', [VendorController::class, "postEdit"])->name("post.edit.vendor")->middleware("auth");

Route::get('/withdrawals', [WithdrawalController::class, "index"])->name("withdrawals")->middleware("auth");
Route::get('/withdrawal/view/{id}', [WithdrawalController::class, "view"])->name("withdrawal.view")->middleware("auth");
Route::get('/withdrawal/delete/{id}', [WithdrawalController::class, "delete"])->name("withdrawal.delete")->middleware("auth");
Route::post('/withdrawal/edit', [WithdrawalController::class, "postEdit"])->name("post.edit.withdrawal")->middleware("auth");

Route::get('/users', [AccountController::class, "index"])->name("users")->middleware("auth");
Route::get('/user/delete/{id}', [AccountController::class, "delete"])->name("user.delete")->middleware("auth");

Route::get('/orders', [OrderController::class, "index"])->name("orders")->middleware("auth");
Route::get('/order/delete/{id}', [OrderController::class, "delete"])->name("order.delete")->middleware("auth");

Route::get('/categories', [CategoryController::class, "index"])->name("categories")->middleware("auth");
Route::post('/category/add', [CategoryController::class, "postNew"])->name("post.new.category")->middleware("auth");
Route::get('/category/delete/{id}', [CategoryController::class, "delete"])->name("category.delete")->middleware("auth");

Route::get('/subcategories', [SubcategoryController::class, "index"])->name("subcategories")->middleware("auth");
Route::post('/subcategory/add', [SubcategoryController::class, "postNew"])->name("post.new.subcategory")->middleware("auth");
Route::get('/subcategory/delete/{id}', [SubcategoryController::class, "delete"])->name("subcategory.delete")->middleware("auth");
