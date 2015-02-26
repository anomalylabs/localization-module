<?php namespace Anomaly\LocalizationModule\Country;

use Anomaly\LocalizationModule\Country\Contract\CountryRepositoryInterface;

/**
 * Class CountryRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Country
 */
class CountryRepository implements CountryRepositoryInterface
{

    /**
     * The country model.
     *
     * @var CountryModel
     */
    protected $model;

    /**
     * Create a new CountryRepository instance.
     *
     * @param CountryModel $model
     */
    public function __construct(CountryModel $model)
    {
        $this->model = $model;
    }
}
