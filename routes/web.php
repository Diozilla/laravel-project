<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' , [FrontController::class,'index'])->name('/');

     Route::get('dategory' , [FrontController::class , 'dategory']);
     Route::get('view-category/{slug}' ,[FrontController::class , 'viewcat'] );
     Route::get('view-category/{cat_slug}/{prod_slug}', [FrontController::class,'product_view']);



     Route::get('/auth/redirect', function () {
        return Socialite::driver('facebook')->redirect();
    });
    Route::get('/auth/callback', function () {
        $user = Socialite::driver('facebook')->user();

    });

        Route::post('/addcart' , [CartController::class , 'addcart'])->middleware(['auth','verified']);
        Route::post('/deletecart' ,[CartController::class , 'deletecart']);
        Route::post('/updatecart' , [CartController::class , 'updatecart']);


Route::middleware('auth')->group(function () {
    Route::view('profile' , 'profile')->name('profile');
    Route::put('profile' , [ProfileController::class] , 'update')->name('profile.update');
     Route::get('viewcart' , [CartController::class , 'viewcart']);
     Route::get('checkout' , [CheckoutController::class , 'index']);

});

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('dashboard',[App\Http\Controllers\Admin\FrontendController::class , 'index'])->name('dashboard');
Route::get('category',[App\Http\Controllers\Admin\CategoryController::class , 'index'])->name('category');
Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class , 'add'])->name('add-category');
Route::post('insert-category',[App\Http\Controllers\Admin\CategoryController::class , 'insert'])->name('insert-category');
Route::get('edit-category/{id}',[App\Http\Controllers\Admin\CategoryController::class , 'edit'])->name('edit-category');
Route::put('update-category/{id}',[App\Http\Controllers\Admin\CategoryController::class , 'update'])->name('update-category');
Route::get('delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class , 'destroy'])->name('destroy-category');

Route::get('product',[App\Http\Controllers\Admin\ProductController::class , 'index'])->name('product');
Route::get('add-product',[App\Http\Controllers\Admin\ProductController::class , 'add'])->name('add-product');
Route::post('insert-product',[App\Http\Controllers\Admin\ProductController::class , 'insert'])->name('insert-product');
Route::get('edit-product/{id}',[App\Http\Controllers\Admin\ProductController::class , 'edit'])->name('edit-product');
Route::put('update-product/{id}',[App\Http\Controllers\Admin\ProductController::class , 'update'])->name('update-product');
Route::get('delete-product/{id}',[App\Http\Controllers\Admin\ProductController::class , 'destroy'])->name('delete-product');


Route::resource('/users', App\Http\Controllers\Admin\UsersController::class);
});
Route::group(['middleware' => ['role:moderator']], function () {
    Route::get('dashboard',[App\Http\Controllers\Admin\FrontendController::class , 'index'])->name('dashboard');
Route::get('category',[App\Http\Controllers\Admin\CategoryController::class , 'index'])->name('category');
Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class , 'add'])->name('add-category');
Route::post('insert-category',[App\Http\Controllers\Admin\CategoryController::class , 'insert'])->name('insert-category');
Route::get('edit-category/{id}',[App\Http\Controllers\Admin\CategoryController::class , 'edit'])->name('edit-category');
Route::put('update-category/{id}',[App\Http\Controllers\Admin\CategoryController::class , 'update'])->name('update-category');
Route::get('delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class , 'destroy'])->name('destroy-category');

Route::get('product',[App\Http\Controllers\Admin\ProductController::class , 'index'])->name('product');
Route::get('add-product',[App\Http\Controllers\Admin\ProductController::class , 'add'])->name('add-product');
Route::post('insert-product',[App\Http\Controllers\Admin\ProductController::class , 'insert'])->name('insert-product');
Route::get('edit-product/{id}',[App\Http\Controllers\Admin\ProductController::class , 'edit'])->name('edit-product');
Route::put('update-product/{id}',[App\Http\Controllers\Admin\ProductController::class , 'update'])->name('update-product');
Route::get('delete-product/{id}',[App\Http\Controllers\Admin\ProductController::class , 'destroy'])->name('delete-product');
Route::resource('/users', App\Http\Controllers\Admin\UsersController::class);



});
require __DIR__.'/auth.php';
