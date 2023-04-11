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

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware'=> 'auth'], function () {

    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');

    // User Route
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::get('/marketers/users',[App\Http\Controllers\Admin\UserController::class,'marketers'])->name('marketers.users');
    Route::resource('role', App\Http\Controllers\Admin\RoleController::class);
    Route::resource('permission', App\Http\Controllers\Admin\PermissionController::class);
    // User Route End

    // Location
    Route::resource('country', App\Http\Controllers\Admin\CountryController::class);
    Route::resource('district', App\Http\Controllers\Admin\DistrictController::class);
    // Location End

    Route::resource('websetting', App\Http\Controllers\Admin\WebSettingController::class);

    // Website
    Route::resource('contact', App\Http\Controllers\Admin\ContactController::class);
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
    Route::resource('news-comment', App\Http\Controllers\Admin\NewsCommentController::class);
    Route::resource('blogcategory', App\Http\Controllers\Admin\BlogCategoryController::class);
    Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('blog-comment', App\Http\Controllers\Admin\BlogCommentController::class);
    Route::resource('slider', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('gallery', App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('projecttype', App\Http\Controllers\Admin\ProjectTypeController::class);
    Route::resource('project', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('socialmedia', App\Http\Controllers\Admin\SocialMediaController::class);
    Route::resource('subscribers', App\Http\Controllers\Admin\SubscriberController::class);
    // End Website


    // Setting
    Route::resource('emailsetting', App\Http\Controllers\Admin\EmailSettingController::class);
    Route::resource('currency', App\Http\Controllers\Admin\CurrencyController::class);
    Route::resource('language', App\Http\Controllers\Admin\LanguageController::class);
    // Setting End



    // CRM

    Route::resource('status', App\Http\Controllers\Admin\CRM\StatusController::class);
    Route::resource('report', App\Http\Controllers\Admin\CRM\ReportController::class);
    Route::resource('customer', App\Http\Controllers\Admin\CRM\CustomerController::class);
    Route::get('customer/modal/show',[App\Http\Controllers\Admin\CRM\CustomerController::class,'customermodal'])->name('customer.modal.show');
    Route::post('customercsvupload',[App\Http\Controllers\Admin\CRM\CustomerController::class,'customercsvupload'])->name('customer.upload.csv.file');
    Route::resource('plot', App\Http\Controllers\Admin\CRM\PlotController::class);
    Route::resource('cusotmerbyusers', App\Http\Controllers\Admin\CRM\CustomerByUserController::class);

    Route::get('customers/assign', [App\Http\Controllers\Admin\CRM\CustomerController::class,'customerassign'])->name('customerassign');
    Route::post('customers/assign/store', [App\Http\Controllers\Admin\CRM\CustomerController::class,'customerassignstore'])->name('customerassign.store');

    Route::get('/customers/assign/marketer/delete/{id}', [App\Http\Controllers\Admin\CRM\CustomerByUserController::class,'destroy'])->name('customer.assign.destroy');
    // CRM End








    // Admin Profile
    Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'profile'])->name('profile');
    Route::get('/profile/edit', [App\Http\Controllers\Admin\ProfileController::class, 'profileEdit'])->name('profile.edit');
    Route::post('/profile/edit', [App\Http\Controllers\Admin\ProfileController::class, 'profileEditPost'])->name('profile.edit');
    Route::get('/profile/passwrord/change', [App\Http\Controllers\Admin\ProfileController::class, 'profilePasswordChange'])->name('password.change');
    Route::post('/profile/passwrord/change', [App\Http\Controllers\Admin\ProfileController::class, 'profilePasswordChangePost'])->name('password.change');
    // Admin Profile End
});





Route::get('user/permission/{id}', [App\Http\Controllers\Admin\UserController::class, 'userPermission'])->name('user.permission');
Route::get('user/customers/{id}', [App\Http\Controllers\Admin\UserController::class, 'userbycustomer'])->name('user.customer');
Route::put('user/permission/update{id}', [App\Http\Controllers\Admin\UserController::class, 'userPermissionUpdate'])->name('user.permission.update');
