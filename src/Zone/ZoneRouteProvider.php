<?php namespace Anomaly\LocalizationModule\Zone;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class ZoneRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Zone
 */
class ZoneRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
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
