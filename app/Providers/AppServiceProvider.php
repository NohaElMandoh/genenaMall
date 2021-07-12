<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Website;
use App\Models\Workday;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*', function ($view) {

            $view->with('website',   Website::find(1));
            $view->with('categories',   Category::get());
            $view->with('services',   Service::get());
            $view->with('workdays',   Workday::get());

            // $workdays = DB ::table('workdays')
            // ->select('*')
            // ->groupByRaw('from, to')
            // ->get();
            // $view->with('workdays',  Workday::select('day')->groupBy('from')->groupBy('to')->get());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
