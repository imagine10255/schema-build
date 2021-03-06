<?php

namespace Imagine10255\SchemaBuild;

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SchemaBuildServiceProvider extends ServiceProvider
{
    /**
     * namespace.
     * @var string
     */
    protected $packageName = 'schema-build';


    /**
     * @param Request $request
     * @param Router $router
     */
    public function boot(Request $request, Router $router)
    {
        Schema::defaultStringLength(191);
        if ($this->app->runningInConsole() === true) {
            $this->handlePublishes();
        }
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\Commands\SchemaBuildExcel::class,
            ]);
        }
    }


    /**
     * handle publishes.
     */
    protected function handlePublishes()
    {
        $this->publishes([
                __DIR__.'/../storage/schema-build' => $this->app->storagePath().'/schema-build']
            , 'storage');
    }
}
