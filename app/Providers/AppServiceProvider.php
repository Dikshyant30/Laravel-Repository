<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Todo\EloquentTodo;
use App\Repositories\Todo\TodoRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TodoRepository::class,EloquentTodo::class);
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
