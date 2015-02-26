<?php namespace Anomaly\LocalizationModule\Zone;

use Anomaly\LocalizationModule\Zone\Contract\ZoneRepositoryInterface;

/**
 * Class ZoneRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Zone
 */
class ZoneRepository implements ZoneRepositoryInterface
{

    /**
     * The country model.
     *
     * @var ZoneModel
     */
    protected $model;

    /**
     * Create a new ZoneRepository instance.
     *
     * @param ZoneModel $model
     */
    public function __construct(ZoneModel $model)
    {
        $this->model = $model;
    }
}
