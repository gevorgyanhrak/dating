<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        $users = User::all();
//        View::share('users', $users);

        View::composer('*', function($view){
            $view->with('users', User::select('name', 'gender', 'age', 'id')->get());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
