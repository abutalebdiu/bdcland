<?php


    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\WebController;



    // Website Route
    Route::get('/',[WebController::class,'index'])->name('website');

    Route::get('contactus',[WebController::class,'contactus'])->name('contactus');
    Route::get('aboutus',[WebController::class,'aboutus'])->name('aboutus');

    Route::get('/projects',[WebController::class,'projects'])->name('projects');
    Route::get('/projects/detail/{id}',[WebController::class,'projectsdetail'])->name('projects.detail');

    Route::get('/blogs',[WebController::class,'blogs'])->name('blogs');
    Route::get('/blog/detail/{slug}',[WebController::class,'blogsdetail'])->name('blog.detail');

    Route::get('web/booking',[WebController::class,'booking'])->name('web.booking');
    Route::post('booking/store',[WebController::class,'bookingstore'])->name('bookingstore');
    Route::post('contact/store',[WebController::class,'contactstore'])->name('contactstore');


    require __DIR__.'/auth.php';
    require __DIR__.'/system.php';
    require __DIR__.'/admin.php';
    require __DIR__.'/marketer.php';
