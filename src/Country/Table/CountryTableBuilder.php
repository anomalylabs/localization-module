<?php namespace Anomaly\LocalizationModule\Country\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class CountryTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Country\Table
 */
class CountryTableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Country\CountryModel';

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'name',
        'iso',
        'call_prefix',
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
