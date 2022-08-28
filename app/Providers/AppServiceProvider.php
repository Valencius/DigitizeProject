<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\IPesertaRepository;
use App\Repository\PesertaRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IPesertaRepository::class, PesertaRepository::class);
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
