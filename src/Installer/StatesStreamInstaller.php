<?php namespace Anomaly\LocalizationModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

/**
 * Class StatesStreamInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Installer
 */
class StatesStreamInstaller extends StreamInstaller
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'states',
        'title_column' => 'name',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'    => ['required' => true, 'unique' => true],
        'iso'     => ['required' => true, 'unique' => true],
        'zone'    => ['required' => true],
        'country' => ['required' => true],
        'enabled' => []
    ];

}
