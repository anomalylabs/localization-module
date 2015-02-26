<?php namespace Anomaly\LocalizationModule\State;

use Illuminate\Support\ServiceProvider;

/**
 * Class StateServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State
 */
class StateServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\LocalizationModule\State\StateModel',
            'Anomaly\LocalizationModule\State\StateModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\State\Contract\StateRepositoryInterface',
            'Anomaly\LocalizationModule\State\StateRepository'
        );

        $this->app->register('Anomaly\LocalizationModule\State\StateRouteProvider');
    }
}
