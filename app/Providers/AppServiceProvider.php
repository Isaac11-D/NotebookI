<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;  // <-- Asegúrate de importar URL

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    
    public function boot(): void
    {
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}

