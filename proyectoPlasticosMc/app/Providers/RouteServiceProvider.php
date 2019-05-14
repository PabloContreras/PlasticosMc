<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapEmpleadoRoutes();

        $this->mapEditorRoutes();

        $this->mapAdministradorRoutes();

        //
    }

    /**
     * Define the "administrador" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAdministradorRoutes()
    {
        Route::group([
            'middleware' => ['web', 'administrador', 'auth:administrador'],
            'prefix' => 'administrador',
            'as' => 'administrador.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/administrador.php');
        });
    }

    /**
     * Define the "editor" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEditorRoutes()
    {
        Route::group([
            'middleware' => ['web', 'editor', 'auth:editor'],
            'prefix' => 'editor',
            'as' => 'editor.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/editor.php');
        });
    }

    /**
     * Define the "empleado" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEmpleadoRoutes()
    {
        Route::group([
            'middleware' => ['web', 'empleado', 'auth:empleado'],
            'prefix' => 'empleado',
            'as' => 'empleado.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/empleado.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
