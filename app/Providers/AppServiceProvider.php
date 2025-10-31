<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void // Enregistrer les services de l'application
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void { // Enregistrer une directive Blade personnalisée
        
         Blade::directive('datetime', function (string $expression) { // Directive personnalisée pour formater les dates

            return "<?= ($expression)->format('m/d/Y H:i:s'); ?>";

        });
    }
}
