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
            'type'  => 'anomaly.field_type.slug',
            'rules' => [
                'min:2',
                'max:2',
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
        'flag'            => 'anomaly.field_type.country'
    ];

}
