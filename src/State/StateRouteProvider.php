<?php namespace Anomaly\LocalizationModule\State;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class StateRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State
 */
class StateRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
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
    }
}
