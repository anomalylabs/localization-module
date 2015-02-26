<?php namespace Anomaly\LocalizationModule\Installer;

use Anomaly\Streams\Platform\Field\FieldInstaller;

/**
 * Class LocalizationFieldInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Installer
 */
class LocalizationFieldInstaller extends FieldInstaller
{

    /**
     * The module fields.
     *
     * @var array
     */
    protected $fields = [
        'name'            => 'anomaly.field_type.text',
        'iso'             => [
            'type'  => 'anomaly.field_type.text',
            'rules' => [
                'alpha'
            ]
        ],
        'date_format'     => 'anomaly.field_type.text',
        'datetime_format' => 'anomaly.field_type.text',
        'enabled'         => [
            'type'   => 'anomaly.field_type.boolean',
            'config' => [
                'default_value' => true
            ]
        ],
        'rtl'             => 'anomaly.field_type.boolean',
        'flag'            => 'anomaly.field_type.country',
        'call_prefix'     => 'anomaly.field_type.text',
        'address_format'  => 'anomaly.field_type.textarea',
        'numeric_iso'     => 'anomaly.field_type.integer',
        'symbol'          => 'anomaly.field_type.text',
        'exchange_rate'   => [
            'type'   => 'anomaly.field_type.decimal',
            'config' => [
                'decimals' => 6
            ]
        ],
        'zone'            => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\LocalizationModule\Zone\ZoneModel'
            ]
        ],
        'currency'        => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\LocalizationModule\Currency\CurrencyModel'
            ]
        ],
        'country'         => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\LocalizationModule\Country\CountryModel'
            ]
        ]
    ];

}
