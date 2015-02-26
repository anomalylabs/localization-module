<?php namespace Anomaly\LocalizationModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

/**
 * Class LanguagesStreamInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Installer
 */
class LanguagesStreamInstaller extends StreamInstaller
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'languages',
        'title_column' => 'name',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'            => ['required' => true, 'unique' => true],
        'iso'             => ['required' => true, 'unique' => true],
        'datetime_format' => ['required' => true],
        'date_format'     => ['required' => true],
        'enabled'         => [],
        'flag'            => [],
        'rtl'             => []
    ];

}
