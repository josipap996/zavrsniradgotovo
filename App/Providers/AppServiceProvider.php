<?php

namespace App\Providers;

use App\Service\AppService;
use App\Service\ConnectionService;
use App\Service\ConnectionServiceInterface;
use App\Service\MediaAppService;
use App\Service\MysqlConnectionService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // put this class into our container
        $this->app->bind(
            ConnectionServiceInterface::class,
            MysqlConnectionService::class
        );

        // for MediaAppService, give a different concrete class
        $this->app->when(MediaAppService::class)
          ->needs(ConnectionServiceInterface::class)
          ->give(ConnectionService::class);

        // bind a primitive array into the container
        $this->app->when(AppService::class)
          ->needs('$config')
          ->give(['foo' => 'bar']);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Response::macro('caps', function(string $value){
            return Response::make(strtoupper($value));
        });

        View::share('title', 'My App');

        Blade::directive('random', function(){
            return '<?= rand(1, 10); ?>';
        });
    }
}