<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use LaravelLocalization;
use Route;
use View;

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
        Paginator::defaultView('vendor.pagination.default');

        View::composer('web.partials.footer', function ($view) {
            $routeAlias = 'routes.'.Route::currentRouteName();
            $changeLangText = 'Ver en castellano';
            $changeLangLink = LaravelLocalization::getURLFromRouteNameTranslated('es', $routeAlias);

            if (app()->getLocale() === 'es') {
                $changeLangText = 'Ver en galego';
                $changeLangLink = LaravelLocalization::getURLFromRouteNameTranslated('gl', $routeAlias);
            }

            if ($routeAlias === 'routes.dreams.show') {
                $changeLangLink = str_replace('{id}', request()->route('id'), $changeLangLink);
            }

            $view->with(compact('changeLangText', 'changeLangLink'));
        });
    }
}
