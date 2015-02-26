<?php namespace Anomaly\LocalizationModule\Zone\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class ZoneTableBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Zone\Table
 */
class ZoneTableBuilder extends TableBuilder
{

    /**
     * The table model.
     *
     * @var string
     */
    protected $model = 'Anomaly\LocalizationModule\Zone\ZoneModel';

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        'name',
        'entry.enabled.icon'
    ];

}
