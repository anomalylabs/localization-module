<?php namespace Anomaly\LocalizationModule;

use Illuminate\Support\ServiceProvider;

/**
 * Class LocalizationModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModuleServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        if (env('INSTALLED')) {
            $this->app->make('twig')->addExtension(
                $this->app->make('Anomaly\LocalizationModule\Language\LanguagePlugin')
            );
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Country registration.
         */
        $this->app->bind(
            'Anomaly\LocalizationModule\Country\CountryModel',
            'Anomaly\LocalizationModule\Country\CountryModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Country\Contract\CountryRepositoryInterface',
            'Anomaly\LocalizationModule\Country\CountryRepository'
        );

        /**
         * Currency registration.
         */
        $this->app->bind(
            'Anomaly\LocalizationModule\Currency\CurrencyModel',
            'Anomaly\LocalizationModule\Currency\CurrencyModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Currency\Contract\CurrencyRepositoryInterface',
            'Anomaly\LocalizationModule\Currency\CurrencyRepository'
        );

        /**
         * Language registration.
         */
        $this->app->bind(
            'Anomaly\LocalizationModule\Language\LanguageModel',
            'Anomaly\LocalizationModule\Language\LanguageModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface',
            'Anomaly\LocalizationModule\Language\LanguageRepository'
        );

        /**
         * State registration.
         */
        $this->app->bind(
            'Anomaly\LocalizationModule\State\StateModel',
            'Anomaly\LocalizationModule\State\StateModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\State\Contract\StateRepositoryInterface',
            'Anomaly\LocalizationModule\State\StateRepository'
        );

        /**
         * Zone registration.
         */
        $this->app->bind(
            'Anomaly\LocalizationModule\Zone\ZoneModel',
            'Anomaly\LocalizationModule\Zone\ZoneModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Zone\Contract\ZoneRepositoryInterface',
            'Anomaly\LocalizationModule\Zone\ZoneRepository'
        );

        $this->app->register('Anomaly\LocalizationModule\LocalizationModuleRouteProvider');
    }
}
