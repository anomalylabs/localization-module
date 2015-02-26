<?php namespace Anomaly\LocalizationModule\Language\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class LanguageFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language\Form
 */
class LanguageFormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Language\LanguageModel';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'name',
        'iso',
        'date_format',
        'datetime_format',
        'flag',
        'enabled',
        'rtl'
    ];

}
