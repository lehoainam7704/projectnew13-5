<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartLastController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

Paginator::useBootstrap();
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resources([
    'admin_user' => UserController::class,
]);

Route::get('/{page?}', [HomeController::class, 'index']);
Route::get('/single-product/{product}', [HomeController::class, 'product'])->name('single.product');
Route::get('/latest-product/{latestproducts}', [HomeController::class, 'latestproducts'])->name('latest.product');
Route::get('/category-product/{categoryproducts}', [HomeController::class, 'categoryproducts'])->name('category');
Route::get('/product-category/{productcategory}', [HomeController::class, 'productcategory'])->name('product.category');
Route::get('/topsellers-product/{topselersproducts}', [HomeController::class, 'topselersproducts'])->name('topsellers.product');
Route::get('/search-product/{searchproduct}', [HomeController::class, 'searchproduct'])->name('timkiem.product');
Route::post('/cart/{add}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/{listproduct}', [CartController::class, 'listproduct'])->name('cart.product');

Route::post('/cart/{addlast}', [CartLastController::class, 'addlast'])->name('cart.addlast');
Route::get('/cart/{listlastproduct}', [CartLastController::class, 'listlastproduct'])->name('cart.lastproduct');

//Admin
Route::middleware('auth')->group(function () {
    Route::resource("/admin_product", ProductController::class);
    Route::get('/home', [ProductController::class, 'trangchu'])->name('admin_product.trangchu');
    // Route để hiển thị trang index
    Route::get('/admin_product', [ProductController::class, 'index'])->name('admin_product.index');
    // Route để hiển thị trang chủ
    Route::get('/admin_product/create', [ProductController::class, 'create'])->name('admin_product.create');
    // Route để lưu sản phẩm mới
    Route::post('/admin_product/AddProduct', [ProductController::class, 'AddNewProduct'])->name('admin_product.AddProduct');

    // Route để hiển thị form sửa sản phẩm
    Route::get('/admin_product/{id}/edit', [ProductController::class, 'edit'])->name('admin_product.edit');

    // Route để hiển thị form view sản phẩm
    Route::get('/admin_product/{product}', [ProductController::class, 'show'])->name('admin_product.show');

    // Route để cập nhật sản phẩm sau khi chỉnh sửa
    Route::put('/admin_product/{id}', [ProductController::class, 'update'])->name('admin_product.update');

    // Route để xóa sản phẩm
    Route::delete('/admin_product/{id}', [ProductController::class, 'destroy'])->name('admin_product.destroy');



    // category
    Route::get('/admin_category', [CategoryController::class, 'index'])->name('admin_category.index');

    // Đường dẫn để hiển thị form tạo mới danh mục
    Route::get('/admin_category/create', [CategoryController::class, 'create'])->name('admin_category.create');

    //  thêm danh mục mới
    Route::post('/admin_category/AddNewcategory', [CategoryController::class, 'AddNewcategory'])->name('admin_category.AddNewcategory');

    // sửa danh mục
    Route::get('/admin_category/{id}/edit', [CategoryController::class, 'edit'])->name('admin_category.edit');

    // Đường dẫn để cập nhật thông tin danh mục
    Route::put('/admin_category/{id}', [CategoryController::class, 'update'])->name('admin_category.update');

    // Đường dẫn để xóa danh mục
    Route::delete('/admin_category/{id}', [CategoryController::class, 'destroy'])->name('admin_category.destroy');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logo-product/{logoproduct}', [HomeController::class, 'logoproduct'])->name('logo.product');
require __DIR__ . '/auth.php';


Route::resource('categories', 'CategoryController');
