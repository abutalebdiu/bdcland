<?php

namespace App\Providers;

use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Support\ServiceProvider;
use App\Models\WebSetting;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        view()->composer("*", function ($view){
            $data = WebSetting::find(1);
            $view->with("setting",$data);
        });

        view()->composer("*", function ($view){
            $data = ProjectType::get();
            $view->with("projecttypes",$data);
        });
    }
}
