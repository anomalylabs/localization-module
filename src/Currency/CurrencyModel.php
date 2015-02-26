<?php namespace Anomaly\LocalizationModule\Currency;

use Anomaly\LocalizationModule\Currency\Contract\CurrencyInterface;
use Anomaly\Streams\Platform\Model\Localization\LocalizationCurrenciesEntryModel;

/**
 * Class CurrencyModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Currency
 */
class CurrencyModel extends LocalizationCurrenciesEntryModel implements CurrencyInterface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 9999;

}