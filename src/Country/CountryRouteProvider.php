<?php namespace Anomaly\LocalizationModule\Country;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class CountryRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Country
 */
class CountryRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->any(
            'admin/localization/countries',
            'Anomaly\LocalizationModule\Http\Controller\Admin\CountriesController@index'
        );

        $router->any(
            'admin/localization/countries/create',
            'Anomaly\LocalizationModule\Http\Controller\Admin\CountriesController@create'
        );

        $router->any(
            'admin/localization/countries/edit/{id}',
            'Anomaly\LocalizationModule\Http\Controller\Admin\CountriesController@edit'
        );
    }
}
