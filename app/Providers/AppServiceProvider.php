<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Sobre;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function($view) {
            $footer_data = Sobre::latest()->first()->toArray();
            $view->with('endereco', $footer_data['endereco'] ?? '')
            ->with('email', $footer_data['email'] ?? '')
            ->with('telefone', $footer_data['telefone'] ?? '');
        });
    }
}
