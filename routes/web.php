<?php

use App\Models\User; 
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SubCategoryController;

use App\Http\Controllers\backend\CouponController;

use App\Http\Controllers\backend\OrderController;

use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\PostController;

use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\LanguageController;

use App\Http\Controllers\PaymentController;







use App\Http\Controllers\FrontendController;
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


Route::get('/test', function () {

    
   app()->make('first_app_bind');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('frontend.user.dashboard');
    })->name('dashboard');
});

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:admin'])->group(function(){

//sanctum

Route::middleware(['auth:admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth:admin');

// Admin All Routes 

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::get('/admin/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

Route::post('/admin/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

Route::get('/admin/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');

});  // end Middleware admin




// Admin Brand All Routes 

Route::prefix('brand')->group(function(){

 Route::get('/add', [BrandController::class, 'BrandAdd'])->name('add.brand');

Route::get('/view', [BrandController::class, 'BrandView'])->name('all.brand');

Route::post('/store', [BrandController::class, 'BrandStore'])->name('brand.store');

Route::get('/edit/{id}', [BrandController::class, 'BrandEdit'])->name('brand.edit');

Route::post('/update', [BrandController::class, 'BrandUpdate'])->name('brand.update');

Route::get('/delete/{id}', [BrandController::class, 'BrandDelete'])->name('brand.delete');

});

// Admin Category all Routes  
Route::prefix('category')->group(function(){

Route::get('/add',[CategoryController::class,'CategoryAdd'])->name('add.category');
Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');

Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');

Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');

// Admin Sub Category All Routes

Route::get('/sub/add', [SubCategoryController::class, 'SubCategoryAdd'])->name('add.subcategory');

Route::get('/sub/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');

Route::post('/sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');

Route::get('/sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');

Route::post('/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');

Route::get('/sub/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');

Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

});




Route::prefix('coupons')->group(function(){


Route::get('/add', [CouponController::class, 'CouponAdd'])->name('admin.add.coupon');

Route::get('/view', [CouponController::class, 'CouponView'])->name('admin.manage-coupon');

Route::post('/store', [CouponController::class, 'CouponStore'])->name('coupon.store');

Route::get('/edit/{id}', [CouponController::class, 'CouponEdit'])->name('coupon.edit');
Route::post('/update/{id}', [CouponController::class, 'CouponUpdate'])->name('coupon.update');

Route::get('/delete/{id}', [CouponController::class, 'CouponDelete'])->name('coupon.delete');
 
});


// Admin Products All Routes 

Route::prefix('product')->group(function(){

Route::get('/add', [ProductController::class, 'AddProduct'])->name('add-product');
Route::get('/products/all', [ProductController::class, 'AllProduct'])->name('all.product');

Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product-store');
Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');

Route::get('/edit/{id}', [ProductController::class, 'EditProduct'])->name('product.edit');

Route::post('/data/update', [ProductController::class, 'ProductDataUpdate'])->name('product-update');

Route::post('/image/update', [ProductController::class, 'MultiImageUpdate'])->name('update-product-image');

Route::post('/thambnail/update', [ProductController::class, 'ThambnailImageUpdate'])->name('update-product-thambnail');

Route::get('/multiimg/delete/{id}', [ProductController::class, 'MultiImageDelete'])->name('product.multiimg.delete');

Route::get('/inactive/{id}', [ProductController::class, 'ProductInactive'])->name('product.inactive');

Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product.active');

Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');
 
});



// Admin Blog  Routes 
Route::prefix('blog')->group(function(){
 Route::get('/category/add', [PostController::class, 'BlogCategoryAdd'])->name('blog.category.add');

Route::get('/category', [PostController::class, 'BlogCategory'])->name('blog.category');

Route::post('/store', [PostController::class, 'BlogCategoryStore'])->name('blogcategory.store');

Route::get('/category/edit/{id}', [PostController::class, 'BlogCategoryEdit'])->name('blog.category.edit');


Route::post('/update', [PostController::class, 'BlogCategoryUpdate'])->name('blogcategory.update');

// Admin View Blog Post Routes 

Route::get('/list/post', [PostController::class, 'ListBlogPost'])->name('list.post');

Route::get('/add/post', [PostController::class, 'AddBlogPost'])->name('add.post');

Route::post('/post/store', [PostController::class, 'BlogPostStore'])->name('post.store');

});

// admin order  route


Route::get('/admin/pending/orders', [OrderController::class, 'newOrder'])->name('admin.neworder');
Route::get('/admin/view/order/{id}', [OrderController::class, 'singleView']);


Route::get('/admin/payment/accept/{id}', [OrderController::class, 'paymentAccept'])->name('payment.accept');

Route::get('/admin/payment/cancel/{id}', [OrderController::class, 'paymentCancel'])->name('payment.cancel');

Route::get('/admin/accept/payment', [OrderController::class, 'AcceptPayment'])->name('admin.accept.payment');
Route::get('/admin/cancel/order', [OrderController::class, 'CancelPayment'])->name('admin.cancel.order');
Route::get('/admin/process/payment', [OrderController::class, 'ProcessPayment'])->name('admin.process.payment');
Route::get('/admin/success/payment', [OrderController::class, 'successPayment'])->name('admin.success.payment');



Route::get('/admin/seo', [OrderController::class, 'seo'])->name('admin.seo');






















//Front end 



Route::get('/',[FrontendController::class,'index'])->name('front.index');

Route::get('add/wishlist/{id}',[WishlistController::class,'addWishlist'])->name('add.wishlist');
Route::get('add/to/cart/{id}',[CartController::class,'AddCart'])->name('add.cart');
Route::get('/check',[CartController::class,'check'])->name('cart.check');


Route::get('/product/details/{id}/{product_name}',[ProductDetailsController::class,'productDetails'])->name('product.details');

Route::post('cart/product/add/{id}',[ProductDetailsController::class,'addCart'])->name('product.cart');


Route::get('/product/cart',[CartController::class,'showCart'])->name('show.cart');


Route::get('remove/cart/{rowId}',[CartController::class,'removeCart'])->name('remove.cart');
Route::post('/update/cart/item',[CartController::class,'updateCartItem'])->name('update.cart.item');

Route::get('/cart/product/view/{id}',[CartController::class,'ViewProduct'])->name('view.product.cart');

Route::post('/cart/product/insert',[CartController::class,'productInsertCart'])->name('insert.into.cart');

Route::get('/user/Checkout/',[CartController::class,'CheckOut'])->name('user.checkout');

Route::get('/user/wishlist/',[CartController::class,'wishlist'])->name('user.wishlist');
Route::post('/checkout/apply/coupon',[CartController::class,'coupon'])->name('apply.coupon');
Route::get('/coupon/remove',[CartController::class,'couponRemove'])->name('coupon.remove');

Route::get('blog/post',[BlogController::class,'blog'])->name('blog.post');

//language

Route::get('/language/english',[LanguageController::class,'english'])->name('language.english');
Route::get('/language/hindi',[LanguageController::class,'hindi'])->name('language.hindi');

//payment

Route::get('payment/page',[CartController::class,'paymentPage'])->name('payment.step');
Route::post('user/payment/process',[PaymentController::class,'payment'])->name('payment.process');

Route::post('user/stripe/charge',[PaymentController::class,'StripeCharge'])->name('stripe.charge');












