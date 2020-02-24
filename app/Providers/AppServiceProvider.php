<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Todos\TodoRepositoryInterface;
use App\Repositories\Todos\TodoRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoRepositoryInterface::class,TodoRepository::class);
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
