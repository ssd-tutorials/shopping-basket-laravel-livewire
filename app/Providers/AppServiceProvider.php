<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Session\BasketRepository;
use App\Repositories\Contracts\BasketRepositoryContract;

class AppServiceProvider extends ServiceProvider
{
    public $singletons = [
        BasketRepositoryContract::class => BasketRepository::class,
    ];

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
        //
    }
}
