<?php namespace Anomaly\LocalizationModule\Language;

use Anomaly\LocalizationModule\Language\Contract\LanguageInterface;
use Anomaly\Streams\Platform\Model\Localization\LocalizationLanguagesEntryModel;

/**
 * Class LanguageModel
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language
 */
class LanguageModel extends LocalizationLanguagesEntryModel implements LanguageInterface
{

    /**
     * The cache minutes.
     *
     * @var int
     */
    protected $cacheMinutes = 9999;

}
