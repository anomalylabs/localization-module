<?php namespace Anomaly\LocalizationModule\Zone;

use Illuminate\Support\ServiceProvider;

/**
 * Class ZoneServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Zone
 */
class ZoneServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\LocalizationModule\Zone\ZoneModel',
            'Anomaly\LocalizationModule\Zone\ZoneModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Zone\Contract\ZoneRepositoryInterface',
            'Anomaly\LocalizationModule\Zone\ZoneRepository'
        );

        $this->app->register('Anomaly\LocalizationModule\Zone\ZoneRouteProvider');
    }
}
