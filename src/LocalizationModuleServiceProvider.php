<?php namespace Anomaly\LocalizationModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class LocalizationModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        'Anomaly\LocalizationModule\Language\LanguagePlugin'
    ];

    /**
     * The class bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\LocalizationModule\Country\CountryModel'   => 'Anomaly\LocalizationModule\Country\CountryModel',
        'Anomaly\LocalizationModule\Currency\CurrencyModel' => 'Anomaly\LocalizationModule\Currency\CurrencyModel',
        'Anomaly\LocalizationModule\Language\LanguageModel' => 'Anomaly\LocalizationModule\Language\LanguageModel',
        'Anomaly\LocalizationModule\State\StateModel'       => 'Anomaly\LocalizationModule\State\StateModel',
        'Anomaly\LocalizationModule\Zone\ZoneModel'         => 'Anomaly\LocalizationModule\Zone\ZoneModel'
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\LocalizationModule\Country\Contract\CountryRepositoryInterface'   => 'Anomaly\LocalizationModule\Country\CountryRepository',
        'Anomaly\LocalizationModule\Currency\Contract\CurrencyRepositoryInterface' => 'Anomaly\LocalizationModule\Currency\CurrencyRepository',
        'Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface' => 'Anomaly\LocalizationModule\Language\LanguageRepository',
        'Anomaly\LocalizationModule\State\Contract\StateRepositoryInterface'       => 'Anomaly\LocalizationModule\State\StateRepository',
        'Anomaly\LocalizationModule\Zone\Contract\ZoneRepositoryInterface'         => 'Anomaly\LocalizationModule\Zone\ZoneRepository'
    ];

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/localization'                      => 'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@redirect',
        'admin/localization/countries'            => 'Anomaly\LocalizationModule\Http\Controller\Admin\CountriesController@index',
        'admin/localization/countries/create'     => 'Anomaly\LocalizationModule\Http\Controller\Admin\CountriesController@create',
        'admin/localization/countries/edit/{id}'  => 'Anomaly\LocalizationModule\Http\Controller\Admin\CountriesController@edit',
        'admin/localization/currencies'           => 'Anomaly\LocalizationModule\Http\Controller\Admin\CurrenciesController@index',
        'admin/localization/currencies/create'    => 'Anomaly\LocalizationModule\Http\Controller\Admin\CurrenciesController@create',
        'admin/localization/currencies/edit/{id}' => 'Anomaly\LocalizationModule\Http\Controller\Admin\CurrenciesController@edit',
        'admin/localization/languages'            => 'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@index',
        'admin/localization/languages/create'     => 'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@create',
        'admin/localization/languages/edit/{id}'  => 'Anomaly\LocalizationModule\Http\Controller\Admin\LanguagesController@edit',
        'admin/localization/states'               => 'Anomaly\LocalizationModule\Http\Controller\Admin\StatesController@index',
        'admin/localization/states/create'        => 'Anomaly\LocalizationModule\Http\Controller\Admin\StatesController@create',
        'admin/localization/states/edit/{id}'     => 'Anomaly\LocalizationModule\Http\Controller\Admin\StatesController@edit',
        'admin/localization/zones'                => 'Anomaly\LocalizationModule\Http\Controller\Admin\ZonesController@index',
        'admin/localization/zones/create'         => 'Anomaly\LocalizationModule\Http\Controller\Admin\ZonesController@create',
        'admin/localization/zones/edit/{id}'      => 'Anomaly\LocalizationModule\Http\Controller\Admin\ZonesController@edit'
    ];

}
