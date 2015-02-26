<?php namespace Anomaly\LocalizationModule\Country;

use Anomaly\LocalizationModule\Country\Contract\CountryInterface;
use Anomaly\Streams\Platform\Model\Localization\LocalizationCountriesEntryModel;

/**
 * Class CountryModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Country
 */
class CountryModel extends LocalizationCountriesEntryModel implements CountryInterface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 9999;

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}