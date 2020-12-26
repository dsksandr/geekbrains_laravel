<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $common_data = [
            'header_menu' => [
                [
                    'name' => 'Курсы',
                    'alias' => 'courses'
                ],
                [
                    'name' => 'Личный кабинет',
                    'alias' => 'profile'
                ],
            ]

        ];
        View::share('common_data', $common_data);
    }
}
