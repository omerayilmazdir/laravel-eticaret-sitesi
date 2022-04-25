<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComp;
use App\Http\Livewire\ShopComp;
use App\Http\Livewire\CartComp;
use App\Http\Livewire\CheckoComp;
use App\Http\Livewire\DetailsComp;
use App\Http\Livewire\SearchComp;
use App\Http\Livewire\User\UserDashboardComp;
use App\Http\Livewire\Admin\AdminDashboardComp;
use App\Http\Livewire\Admin\AdminAddCategoryComp;
use App\Http\Livewire\Admin\AdminEditCategoryComp;
use App\Http\Livewire\Admin\AdminProductComp;
use App\Http\Livewire\Admin\AdminAddProductComp;
use App\Http\Livewire\Admin\AdminEditProductComp;
use App\Http\Livewire\Admin\AdminCategoryComp;
use App\Http\Livewire\Admin\AdminHomeSliderComp;
use App\Http\Livewire\Admin\AdminEditHomeSliderComp;
use App\Http\Livewire\Admin\AdminAddHomeSliderComp;
use App\Http\Livewire\Admin\AdminHomeCategoryComp;
use App\Http\Livewire\Admin\AdminSaleComp;
use App\Http\Livewire\WishlistComp;
use App\Http\Livewire\ThankyouComp;
use App\Http\Livewire\Admin\AdminOrderComp;
use App\Http\Livewire\Admin\AdminOrderDetailsComp;
use App\Http\Livewire\User\UserOrdersComp;
use App\Http\Livewire\User\UserOrderDetailsComp;
use App\Http\Livewire\User\UserChangePasswordComp;
use App\Http\Livewire\User\UserProfileComp;
use App\Http\Livewire\User\UserEditProfileComp;

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

//  Route::get('/', function () {
//     return view('layouts/master');
// });
Route::get('/',HomeComp::class);

Route::get('/shop',ShopComp::class);

Route::get('/cart',CartComp::class)->name('product.cart');

Route::get('/checkout',CheckoComp::class)->name('checkout');

Route::get('/product/{slug}',DetailsComp::class)->name('product.details');

Route::get('/product-category/{category_slug}',App\Http\Livewire\CategoryComp::class)->name('product.category');

Route::get('/search',SearchComp::class)->name('product.search');

Route::get('/wishlist',WishlistComp::class)->name('product.wishlist');

Route::get('/thank-you',ThankyouComp::class)->name('thankyou');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// User or Customer
Route::middleware(['auth:sanctum','verified'])->group(function (){
    Route::get('/user/dashboard',UserDashboardComp::class)->name('user.dashboard');
    Route::get('/user/orders',UserOrdersComp::class)->name('user.orders');
    Route::get('/user/orders/{order_id}',UserOrderDetailsComp::class)->name('user.orderdetails');
    Route::get('/user/change-password',UserChangePasswordComp::class)->name('user.changepassword');
    Route::get('user/profile',UserProfileComp::class)->name('user.profile');
    Route::get('user/profile/edit',UserEditProfileComp::class)->name('user.editprofile');
});

// Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function (){
    Route::get('/admin/dashboard',AdminDashboardComp::class)->name('admin.dashboard');
    Route::get('/admin/categories',AdminCategoryComp::class)->name('admin.categories');
    Route::get('/admin/category/add',AdminAddCategoryComp::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComp::class)->name('admin.editcategory');
    Route::get('/admin/products',AdminProductComp::class)->name('admin.products');
    Route::get('/admin/product/add',AdminAddProductComp::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}',AdminEditProductComp::class)->name('admin.editproduct');


    Route::get('/admin/slider',AdminHomeSliderComp::class)->name('admin.homeslider');
    Route::get('/admin/slider/add',AdminAddHomeSliderComp::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComp::class)->name('admin.edithomeslider');

    Route::get('/admin/home-categories',AdminHomeCategoryComp::class)->name('admin.homecategories');
    Route::get('/admin/sale',AdminSaleComp::class)->name('admin.sale');

    Route::get('/admin/orders',AdminOrderComp::class)->name('admin.orders');
    Route::get('/admin/orders/{order_id}',AdminOrderDetailsComp::class)->name('admin.orderdetails');
});
