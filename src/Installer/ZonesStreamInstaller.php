<?php namespace Anomaly\LocalizationModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

/**
 * Class ZonesStreamInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Installer
 */
class ZonesStreamInstaller extends StreamInstaller
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'zones',
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
        'enabled' => []
    ];

}
