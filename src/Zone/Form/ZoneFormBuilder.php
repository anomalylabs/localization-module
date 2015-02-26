<?php namespace Anomaly\LocalizationModule\Zone\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class ZoneFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Zone\Form
 */
class ZoneFormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Zone\ZoneModel';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'name',
        'enabled'
    ];

}
