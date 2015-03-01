<?php namespace Anomaly\LocalizationModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;

/**
 * Class LocalizationModuleSeeder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule
 */
class LocalizationModuleSeeder extends Seeder
{

    /**
     * Seed the localization module.
     */
    public function run()
    {
        $this->call('Anomaly\LocalizationModule\Language\LanguageSeeder');
    }
}
