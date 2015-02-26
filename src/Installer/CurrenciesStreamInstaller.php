<?php namespace Anomaly\LocalizationModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

/**
 * Class CurrenciesStreamInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Installer
 */
class CurrenciesStreamInstaller extends StreamInstaller
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'currencies',
        'title_column' => 'name',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'          => ['required' => true, 'unique' => true],
        'iso'           => ['required' => true, 'unique' => true],
        'numeric_iso'   => ['required' => true, 'unique' => true],
        'symbol'        => ['required' => true],
        'exchange_rate' => ['required' => true],
        'enabled'       => []
    ];

}
