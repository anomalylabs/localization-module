<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyModuleLocalization_100_alpha_CreateCountriesStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyModuleLocalization_100_alpha_CreateCountriesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'countries',
        'title_column' => 'name',
        'translatable' => true,
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'           => ['required' => true, 'unique' => true, 'translatable' => true],
        'iso'            => ['required' => true, 'unique' => true],
        'zone'           => [],
        'enabled'        => [],
        'currency'       => [],
        'call_prefix'    => [],
        'address_format' => []
    ];

}
