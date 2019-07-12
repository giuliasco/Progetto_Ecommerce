<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function boot()
    {
        view()->composer(
            ['index', '/shop' , '/single-product-details', 'search_results', 'Profile', 'my_orders', 'data',
            'contact', 'cart', 'checkout', 'adress'],

            function($view) {
                $carts= DB::table('product')
                    ->join('gallery', 'product.id', '=', 'gallery.product_id')
                    ->join('shopping_cart', 'product.id', '=', 'shopping_cart.product_id')
                    ->select('product.name', 'gallery.path' , 'product.id', 'product.description', 'product.price','product.brand')
                    ->groupby('product.id', 'gallery.product_id')
                    ->get() ;

                $view->with('carts', $carts);
            });
    }


    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

}
