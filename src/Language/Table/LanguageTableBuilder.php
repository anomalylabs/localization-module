<?php namespace Anomaly\LocalizationModule\Language\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class LanguageTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language\Table
 */
class LanguageTableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Language\LanguageModel';

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'name',
        'iso',
        'flag',
        'date_format',
        'datetime_format',
        'entry.enabled.icon'
    ];

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'edit'
    ];

}
