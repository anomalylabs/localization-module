<?php namespace Anomaly\LocalizationModule\Currency;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class CurrencyRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Currency
 */
class CurrencyRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->any(
            'admin/localization/currencies',
            'Anomaly\LocalizationModule\Http\Controller\Admin\CurrenciesController@index'
        );

        $router->any(
            'admin/localization/currencies/create',
            'Anomaly\LocalizationModule\Http\Controller\Admin\CurrenciesController@create'
        );

        $router->any(
            'admin/localization/currencies/edit/{id}',
            'Anomaly\LocalizationModule\Http\Controller\Admin\CurrenciesController@edit'
        );
    }
}
