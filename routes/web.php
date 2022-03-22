<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminControllers\AdminController;
use App\Http\Controllers\AdminControllers\CategoryController;
use App\Http\Controllers\AdminControllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', [HomeController::class, "index"]);

Route::get('/admin', [AdminController::class, "dashboard"]);

Route::get('/login', [AuthController::class, "login"]);

Route::get('/admin/categories', [CategoryController::class, "category"]);

Route::get('/admin/categories/add', [CategoryController::class, "addForm"]);
Route::post('/admin/categories/add', [CategoryController::class, "add"]);

Route::get('/admin/categories/edit/{id}', [CategoryController::class, "editForm"]);
Route::post('/admin/categories/edit/{id}', [CategoryController::class, "edit"]);

Route::delete('/admin/categories/del/{id}', [CategoryController::class, "delete"])->name('delete');

Route::get('/admin/products', [ProductController::class, "product"]);

Route::delete('/admin/product/del/{id}', [ProductController::class, "delete"])->name('delete');

Route::get('/admin/products/add', [ProductController::class, "addForm"]);
Route::post('/admin/products/add', [ProductController::class, "add"]);

Route::get('/admin/products/edit/{id}', [ProductController::class, "editForm"]);
Route::post('/admin/products/edit/{id}', [ProductController::class, "edit"]);


// Route::prefix('/categories/')->name('category.')->groups(function () {

// });




