<?php

namespace Returntrueir\Categories\Providers;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Returntrueir\Categories\Http\Controllers';


/*    public function boot()
    {
        $this->configureRateLimiting();
    }*/

    /*public function map()
    {

        Route::namespace($this->namespace)
            ->group(base_path('routes/web.php'));

        $middlewares = array_merge(['web'],config('categories.crudMiddlewares'));
        Route::name("dashboard.")
            ->namespace("{$this->namespace}\Dashboard")
            ->middleware($middlewares)
            ->prefix('dashboard')
            ->group(base_path('routes/dashboard.php'));
    }*/



    public function map()
    {
        $this->mapWebRoutes();
        $this->mapDashboardApiRoutes();
        $this->mapDashboardRoutes();
        $this->mapApiRoutes();
    }

    protected function mapWebRoutes()
    {
        #$middlewares = array_merge(['web'],config('categories.normalMiddlewares'));
        Route::name("website.")
            ->namespace("{$this->namespace}\Website")
            ->middleware(['web'])
            ->group($this->basePath('routes/web.php'));
    }
    protected function mapApiRoutes()
    {
        #$middlewares = array_merge(['api'],config('categories.normalMiddlewares'));
        Route::name('api.')
            ->namespace("{$this->namespace}\Api")
            ->middleware(['api'])
            ->prefix('api')
            ->group($this->basePath('routes/api.php'));
    }
    protected function mapDashboardApiRoutes()
    {
        #$middlewares = array_merge(['api'],config('categories.dashboardMiddlewares'));
        Route::name("apiDashboard.")
            ->namespace("{$this->namespace}\DashboardApi")
            ->middleware(['api'])
            ->prefix('api-dashboard')
            ->group($this->basePath('routes/dashboard_api.php'));
    }
    protected function mapDashboardRoutes()
    {
        #$middlewares = array_merge(['web'],config('categories.dashboardMiddlewares'));
        Route::name("dashboard.")
            ->namespace("{$this->namespace}\Dashboard")
            ->middleware(['web'])
            ->prefix('dashboard')
            ->group($this->basePath('routes/dashboard.php'));
    }


/*    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }*/

    protected function basePath($path = '')
    {
        return __DIR__ . '/../../' . $path;
    }
}