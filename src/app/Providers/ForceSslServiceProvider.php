<?php

namespace MHMartinez\ForceSsl\app\Providers;

use Illuminate\Support\ServiceProvider;
use MHMartinez\ForceSsl\app\Http\Middleware\ForceSslMiddleware;
use Illuminate\Contracts\Http\Kernel;

class ForceSslServiceProvider extends ServiceProvider
{
    public function boot(Kernel $kernel): void
    {
        $this->publishes([
            __DIR__ . '/../../config/force_ssl.php' => config_path('force_ssl.php'),
        ], 'config');
        $kernel->pushMiddleware(ForceSslMiddleware::class);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/force_ssl.php', 'force_ssl'
        );
    }
}
