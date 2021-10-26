<?php

namespace App\Providers;

use App\Models\ubicacion;
use App\Models\marcas;
use App\Models\bodegas;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['refrigeradoras.fields'], function ($view) {
            $tbubicacionItems = ubicacion::pluck('nomubicacion','idubicacion')->toArray();
            $view->with('tbubicacionItems', $tbubicacionItems);
        });
        View::composer(['refrigeradoras.fields'], function ($view) {
            $tbmarcaItems = marcas::pluck('nommarca','idmarcas')->toArray();
            $view->with('tbmarcaItems', $tbmarcaItems);
        });
        
        View::composer(['t_v_s.fields'], function ($view) {
            $tbubicacionItems = ubicacion::pluck('nomubicacion','idubicacion')->toArray();
            $view->with('tbubicacionItems', $tbubicacionItems);
        });
        View::composer(['t_v_s.fields'], function ($view) {
            $tbmarcaItems = marcas::pluck('nommarca','idmarcas')->toArray();
            $view->with('tbmarcaItems', $tbmarcaItems);
        });
        View::composer(['computadoras.fields'], function ($view) {
            $tbubicacionItems = ubicacion::pluck('nomubicacion','idubicacion')->toArray();
            $view->with('tbubicacionItems', $tbubicacionItems);
        });
        View::composer(['computadoras.fields'], function ($view) {
            $tbmarcaItems = marcas::pluck('nommarca','idmarcas')->toArray();
            $view->with('tbmarcaItems', $tbmarcaItems);
        });

        View::composer(['ubicacions.fields'], function ($view) {
            $tbbodegaItems = bodegas::pluck('nombodega','idbodega')->toArray();
            $view->with('tbbodegaItems', $tbbodegaItems);
        });
        //
    }
}