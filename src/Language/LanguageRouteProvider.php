<?php namespace Anomaly\LocalizationModule\Language;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class LanguageRouteProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language
 */
class LanguageRouteProvider extends RouteServiceProvider
{

    /**
     * Map the routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->any(
            'admin/localization',
            function () {
                return redirect('admin/localization/languages');
            }
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
    }
}
