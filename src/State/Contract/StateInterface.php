<?php namespace Anomaly\LocalizationModule\State\Contract;

use Anomaly\LocalizationModule\Country\Contract\CountryInterface;
use Anomaly\LocalizationModule\Zone\Contract\ZoneInterface;

/**
 * Interface StateInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\State\Contract
 */
interface StateInterface
{

    /**
     * Get the related zone.
     *
     * @return ZoneInterface
     */
    public function getZone();

    /**
     * Get the related zone's name.
     *
     * @return string
     */
    public function getZoneName();

    /**
     * Get the related country.
     *
     * @return CountryInterface
     */
    public function getCountry();

    /**
     * Get the related country's name.
     *
     * @return string
     */
    public function getCountryName();
}
