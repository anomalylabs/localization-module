<?php namespace Anomaly\LocalizationModule\Currency;

use Illuminate\Support\ServiceProvider;

/**
 * Class CurrencyServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Currency
 */
class CurrencyServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\LocalizationModule\Currency\CurrencyModel',
            'Anomaly\LocalizationModule\Currency\CurrencyModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Currency\Contract\CurrencyRepositoryInterface',
            'Anomaly\LocalizationModule\Currency\CurrencyRepository'
        );

        $this->app->register('Anomaly\LocalizationModule\Currency\CurrencyRouteProvider');
    }
}
