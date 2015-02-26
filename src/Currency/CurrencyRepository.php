<?php namespace Anomaly\LocalizationModule\Currency;

use Anomaly\LocalizationModule\Currency\Contract\CurrencyRepositoryInterface;

/**
 * Class CurrencyRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Currency
 */
class CurrencyRepository implements CurrencyRepositoryInterface
{

    /**
     * The currency model.
     *
     * @var CurrencyModel
     */
    protected $model;

    /**
     * Create a new CurrencyRepository instance.
     *
     * @param CurrencyModel $model
     */
    public function __construct(CurrencyModel $model)
    {
        $this->model = $model;
    }
}
