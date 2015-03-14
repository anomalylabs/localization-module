<?php namespace Anomaly\LocalizationModule;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class LocalizationModuleRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModuleRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        /**
         * Country routes.
         */
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

        /**
         * Currency routes.
         */
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

        /**
         * Language routes.
         */
        $router->any(
            'admin/localization',
            'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@redirect'
        );

        $router->any(
            'admin/localization/languages',
            'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@index'
        );

        $router->any(
            'admin/localization/languages/create',
            'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@create'
        );

        $router->any(
            'admin/localization/languages/edit/{id}',
            'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@edit'
        );

        /**
         * State routes.
         */
        $router->any(
            'admin/localization/states',
            'Anomaly\LocalizationModule\Http\Controller\Admin\StatesController@index'
        );

        $router->any(
            'admin/localization/states/create',
            'Anomaly\LocalizationModule\Http\Controller\Admin\StatesController@create'
        );

        $router->any(
            'admin/localization/states/edit/{id}',
            'Anomaly\LocalizationModule\Http\Controller\Admin\StatesController@edit'
        );

        /**
         * Zone routes.
         */
        $router->any(
            'admin/localization/zones',
            'Anomaly\LocalizationModule\Http\Controller\Admin\ZonesController@index'
        );

        $router->any(
            'admin/localization/zones/create',
            'Anomaly\LocalizationModule\Http\Controller\Admin\ZonesController@create'
        );

        $router->any(
            'admin/localization/zones/edit/{id}',
            'Anomaly\LocalizationModule\Http\Controller\Admin\ZonesController@edit'
        );
    }
}
