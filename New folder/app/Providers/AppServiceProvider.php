<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Latestproduct;
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
        // view()->composer('*', function($view){
        //     $category = Category::all();
        //     $product = Product::all();
        //     $data_category = Category::all(); 
        //     $data_latestproduct = Latestproduct::all();
        //         $view->with(compact('product','data_category','data_latestproduct','category'));
        //   });
    }
}
