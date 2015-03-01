<?php namespace Anomaly\LocalizationModule\Language;

use Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface;
use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class LanguagePlugin
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language
 */
class LanguagePlugin extends Plugin
{

    /**
     * The language repository.
     *
     * @var LanguageRepositoryInterface
     */
    protected $languages;

    /**
     * Create a new LanguagePlugin instance.
     *
     * @param LanguageRepositoryInterface $languages
     */
    public function __construct(LanguageRepositoryInterface $languages)
    {
        $this->languages = $languages;
    }

    /**
     * Get the plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('language_get', [$this->languages, 'findByIso']),
            new \Twig_SimpleFunction('language_enabled', [$this->languages, 'enabled'])
        ];
    }
}
