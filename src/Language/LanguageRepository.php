<?php namespace Anomaly\LocalizationModule\Language;

use Anomaly\LocalizationModule\Language\Contract\LanguageInterface;
use Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;

/**
 * Class LanguageRepository
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Language
 */
class LanguageRepository implements LanguageRepositoryInterface
{

    /**
     * The language model.
     *
     * @var LanguageModel
     */
    protected $model;

    /**
     * Create a new LanguageRepository instance.
     *
     * @param LanguageModel $model
     */
    public function __construct(LanguageModel $model)
    {
        $this->model = $model;
    }

    /**
     * Return only enabled languages.
     *
     * @return EntryCollection
     */
    public function enabled()
    {
        return $this->model->where('enabled', true)->get();
    }

    /**
     * Find a language by it's ISO.
     *
     * @param $iso
     * @return LanguageInterface
     */
    public function findByIso($iso)
    {
        return $this->model->where('iso', $iso)->first();
    }
}
