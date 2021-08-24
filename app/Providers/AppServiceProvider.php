<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use View;

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
        View::composer('front-end.includes.header',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        //category-product blade show for sidebar
        View::composer('front-end.category.category-product',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        View::composer('front-end.category.category-product',function ($view){
            $view->with('brands', Brand::where('publication_status',1)
                ->orderBy('id','DESC')
                ->take(15)
                ->get());
        });
        //front-end/product-details blade show for sidebar
        View::composer('front-end.product-details.product-details',function ($view){
            $view->with('categories', Category::where('publication_status',1)->get());
        });
        View::composer('front-end.product-details.product-details',function ($view){
            $view->with('brands', Brand::where('publication_status',1)
                ->orderBy('id','DESC')
                ->take(15)
                ->get());
        });
        View::composer('front-end.includes.footer',function ($view){
            $view->with('brands', Brand::where('publication_status',1)
                ->orderBy('id','DESC')
                ->take(5)
                ->get());
        });
    }
}
