<?php namespace Anomaly\LocalizationModule\Country\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class CountryFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Country\Form
 */
class CountryFormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Country\CountryModel';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'name',
        'iso',
        'call_prefix',
        'address_format',
        'enabled'
    ];

}
