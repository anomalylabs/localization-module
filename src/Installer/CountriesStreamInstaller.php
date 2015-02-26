<?php namespace Anomaly\LocalizationModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

/**
 * Class CountriesStreamInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Installer
 */
class CountriesStreamInstaller extends StreamInstaller
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'countries',
        'title_column' => 'name',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'           => ['required' => true, 'unique' => true, 'translatable' => true],
        'iso'            => ['required' => true, 'unique' => true],
        'zone'           => [],
        'enabled'        => [],
        'currency'       => [],
        'call_prefix'    => [],
        'address_format' => []
    ];

}
