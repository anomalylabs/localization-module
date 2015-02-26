<?php namespace Anomaly\LocalizationModule;

use Anomaly\Streams\Platform\Addon\Module\ModuleInstaller;

/**
 * Class LocalizationModuleInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModuleInstaller extends ModuleInstaller
{

    /**
     * The module installers.
     *
     * @var array
     */
    protected $installers = [
        'Anomaly\LocalizationModule\Installer\LocalizationFieldInstaller',
        'Anomaly\LocalizationModule\Installer\CurrenciesStreamInstaller',
        'Anomaly\LocalizationModule\Installer\LanguagesStreamInstaller',
        'Anomaly\LocalizationModule\Installer\CountriesStreamInstaller',
        'Anomaly\LocalizationModule\Installer\StatesStreamInstaller',
        'Anomaly\LocalizationModule\Installer\ZonesStreamInstaller'
    ];

}
