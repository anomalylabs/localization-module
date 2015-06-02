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
                'new_language'
            ]
        ],
        'zones'      => [
            'buttons' => [
                'new_zone'
            ]
        ],
        'countries'  => [
            'buttons' => [
                'new_country'
            ]
        ],
        'states'     => [
            'buttons' => [
                'new_state'
            ]
        ],
        'currencies' => [
            'buttons' => [
                'new_currency'
            ]
        ]
    ];

}
