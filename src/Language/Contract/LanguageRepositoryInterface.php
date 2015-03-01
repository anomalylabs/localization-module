<?php namespace Anomaly\LocalizationModule\Language\Contract;

use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Interface LanguageRepositoryInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language\Contract
 */
interface LanguageRepositoryInterface
{

    /**
     * Create a new language.
     *
     * @param array $attributes
     * @return static
     */
    public function create(array $attributes);

    /**
     * Return only enabled languages.
     *
     * @return EntryCollection
     */
    public function enabled();

    /**
     * Find a language by it's ISO.
     *
     * @param $iso
     * @return LanguageInterface
     */
    public function findByIso($iso);
}
