<?php namespace Anomaly\LocalizationModule\Country;

use Illuminate\Support\ServiceProvider;

/**
 * Class CountryServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Country
 */
class CountryServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\LocalizationModule\Country\CountryModel',
            'Anomaly\LocalizationModule\Country\CountryModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Country\Contract\CountryRepositoryInterface',
            'Anomaly\LocalizationModule\Country\CountryRepository'
        );

        $this->app->register('Anomaly\LocalizationModule\Country\CountryRouteProvider');
    }
}
