<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'marketer', 'as' => 'marketer.','middleware'=> ['auth','marketer']], function () {

    Route::get('dashboard',[App\Http\Controllers\Marketer\DashboardController::class,'index'])->name('dashboard');
    Route::resource('customer', App\Http\Controllers\Marketer\CustomerController::class);
    Route::resource('report', App\Http\Controllers\Marketer\ReportController::class);

});
