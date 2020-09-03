<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);

        $segment = Request::segment(1);
        //dd($segment);

        switch ($segment) {
            case 'inmueble':
                $class = "property-details-page";
                break;
            case 'nosotros':
                $class = "blog-page";
                break;
            case 'contacto':
                $class = "contact-page";
                break;
            default:
                $class = "";
        }

        View::share('class', $class);

        Paginator::defaultView('vendor.pagination.bootstrap-4');

        Paginator::defaultSimpleView('vendor.pagination.simple-bootstrap-4');
    }
}
