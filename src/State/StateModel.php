<?php namespace Anomaly\LocalizationModule\State;

use Anomaly\LocalizationModule\Country\Contract\CountryInterface;
use Anomaly\LocalizationModule\State\Contract\StateInterface;
use Anomaly\LocalizationModule\Zone\Contract\ZoneInterface;
use Anomaly\Streams\Platform\Model\Localization\LocalizationStatesEntryModel;

/**
 * Class StateModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State
 */
class StateModel extends LocalizationStatesEntryModel implements StateInterface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 9999;

    /**
     * Get the related zone.
     *
     * @return ZoneInterface
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Get the related zone's name.
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->getZone()->getName();
    }

    /**
     * Get the related country.
     *
     * @return CountryInterface
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Get the related country's name.
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->getCountry()->getName();
    }
}