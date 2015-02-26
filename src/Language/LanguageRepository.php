<?php namespace Anomaly\LocalizationModule\Language;

use Anomaly\LocalizationModule\Language\Contract\LanguageRepositoryInterface;

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
}
