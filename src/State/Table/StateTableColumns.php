<?php namespace Anomaly\LocalizationModule\State\Table;

use Anomaly\LocalizationModule\State\Contract\StateInterface;

/**
 * Class StateTableColumns
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State\Table
 */
class StateTableColumns
{

    /**
     * Handle the table columns.
     *
     * @param StateTableBuilder $builder
     */
    public function handle(StateTableBuilder $builder)
    {
        $builder->setColumns(
            [
                'name',
                'iso',
                'zone'    => function (StateInterface $entry) {
                    return $entry->getZoneName();
                },
                'country' => function (StateInterface $entry) {
                    return $entry->getCountryName();
                },
                'entry.enabled.icon'
            ]
        );
    }
}
