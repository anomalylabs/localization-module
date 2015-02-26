<?php namespace Anomaly\LocalizationModule\State\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class StateFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State\Form
 */
class StateFormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\State\StateModel';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'name',
        'iso',
        'zone',
        'country',
        'enabled'
    ];

}
