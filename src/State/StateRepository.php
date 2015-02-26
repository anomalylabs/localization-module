<?php namespace Anomaly\LocalizationModule\State;

use Anomaly\LocalizationModule\State\Contract\StateRepositoryInterface;

/**
 * Class StateRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State
 */
class StateRepository implements StateRepositoryInterface
{

    /**
     * The state model.
     *
     * @var StateModel
     */
    protected $model;

    /**
     * Create a new StateRepository instance.
     *
     * @param StateModel $model
     */
    public function __construct(StateModel $model)
    {
        $this->model = $model;
    }
}
