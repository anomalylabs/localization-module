<?php namespace Anomaly\LocalizationModule\Currency\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class CurrencyTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Currency\Table
 */
class CurrencyTableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Currency\CurrencyModel';

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'name',
        'iso',
        'numeric_iso',
        'symbol',
        'exchange_rate',
        'entry.enabled.icon'
    ];

}
