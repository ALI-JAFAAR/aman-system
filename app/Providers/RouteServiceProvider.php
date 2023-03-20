<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(){
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map(){

        $this->mapApiRoutes();

        $this->mapWebRoutes();



        // Custome routes start from here

        $this->mapAdminRoutes();

        $this->mapAccountantRoutes();

        $this->mapCheckerRoutes();

        $this->mapData_entryRoutes();

        $this->mapGuildRoutes();

        $this->mapHrRoutes();

        $this->mapMerchantRoutes();

        $this->mapPoliceRoutes();

        $this->mapUnionRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes(){
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
    protected function mapApiRoutes(){
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }




    // Custome routes start from here


    protected function mapAdminRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin/admin.php'));
    }

    protected function mapAccountantRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/accountant/accountant.php'));
    }

    protected function mapCheckerRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/checker/checker.php'));
    }

    protected function mapData_entryRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/data_entry/data_entry.php'));
    }

    protected function mapGuildRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/guild/guild.php'));
    }

    protected function mapHrRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/hr/hr.php'));
    }

    protected function mapMerchantRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/merchant/merchant.php'));
    }

    protected function mapPoliceRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/police/police.php'));
    }

    protected function mapUnionRoutes(){
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/union/union.php'));
    }

}
