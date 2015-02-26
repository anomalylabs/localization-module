<?php namespace Anomaly\LocalizationModule\Language;

use Illuminate\Support\ServiceProvider;

/**
 * Class LanguageServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language
 */
class LanguageServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\LocalizationModule\Language\LanguageModel',
            'Anomaly\LocalizationModule\Language\LanguageModel'
        );

        $this->app->bind(
            'Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface',
            'Anomaly\LocalizationModule\Language\LanguageRepository'
        );

        $this->app->register('Anomaly\LocalizationModule\Language\LanguageRouteProvider');
    }
}