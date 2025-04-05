<?php

namespace App\Providers;

use App\Support\DataShare;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Session\BasketRepository;
use App\Repositories\Contracts\BasketRepositoryContract;

class AppServiceProvider extends ServiceProvider
{

    public $singletons = [
        BasketRepositoryContract::class => BasketRepository::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //https://paypal.github.io/PayPal-PHP-SDK/
        config([
            'config/paypal.php',
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config([
            'config/paypal.php',
        ]);
        
        Schema::defaultStringLength(191);
        DataShare::settings();
    }
}
