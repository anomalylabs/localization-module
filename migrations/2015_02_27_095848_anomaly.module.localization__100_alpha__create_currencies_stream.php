<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleLocalization_1_0_0_alpha_CreateCurrenciesStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleLocalization_100_alpha_CreateCurrenciesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'currencies',
        'title_column' => 'name',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'          => ['required' => true, 'unique' => true],
        'iso'           => ['required' => true, 'unique' => true],
        'numeric_iso'   => ['required' => true, 'unique' => true],
        'symbol'        => ['required' => true],
        'exchange_rate' => ['required' => true],
        'enabled'       => []
    ];

}
