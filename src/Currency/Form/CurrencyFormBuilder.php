<?php namespace Anomaly\LocalizationModule\Currency\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class CurrencyFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Currency\Form
 */
class CurrencyFormBuilder extends FormBuilder
{

    /**
     * The form model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Currency\CurrencyModel';

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'name',
        'iso',
        'numeric_iso',
        'symbol',
        'exchange_rate',
        'enabled'
    ];

}
