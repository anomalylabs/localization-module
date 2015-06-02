<?php namespace Anomaly\LocalizationModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class LocalizationModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModule extends Module
{

    /**
     * The module icon.
     *
     * @var string
     */
    protected $icon = 'language';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'languages'  => [
            'buttons' => [
                'create' => [
                    'href' => 'admin/localization/languages/create'
                ]
            ]
        ],
        'zones'      => [
            'buttons' => [
                'create'
            ]
        ],
        'countries'  => [
            'buttons' => [
                'create'
            ]
        ],
        'states'     => [
            'buttons' => [
                'create'
            ]
        ],
        'currencies' => [
            'buttons' => [
                'create'
            ]
        ]
    ];

}
