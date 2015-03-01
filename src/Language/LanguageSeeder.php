<?php namespace Anomaly\LocalizationModule\Language;

use Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface;
use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class LanguageSeeder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language
 */
class LanguageSeeder extends Seeder
{

    /**
     * The languages repository.
     *
     * @var LanguageRepositoryInterface
     */
    protected $languages;

    /**
     * Create a new LanguageSeeder instance.
     *
     * @param LanguageRepositoryInterface $languages
     */
    public function __construct(LanguageRepositoryInterface $languages)
    {
        $this->languages = $languages;
    }

    /**
     * Seed the languages.
     */
    public function run()
    {
        $this->languages->create(
            [
                'name'            => 'English',
                'iso'             => 'en',
                'enabled'         => true,
                'flag'            => 'US',
                'date_format'     => 'm/d/Y',
                'datetime_format' => 'm/d/Y g:iA',
                'rtl'             => false
            ]
        );
    }
}
