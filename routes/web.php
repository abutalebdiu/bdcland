<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;




Route::get('/',[WebController::class,'index'])->name('website');


require __DIR__.'/auth.php';
require __DIR__.'/system.php';
require __DIR__.'/admin.php';
require __DIR__.'/marketer.php';
