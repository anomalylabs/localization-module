<?php namespace Anomaly\LocalizationModule\Http\Controller\Admin;

use Anomaly\LocalizationModule\Country\Form\CountryFormBuilder;
use Anomaly\LocalizationModule\Country\Table\CountryTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class CountriesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Http\Controller\Admin
 */
class CountriesController extends AdminController
{

    /**
     * Return an index of existing entries.
     *
     * @param CountryTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(CountryTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param CountryFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(CountryFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param CountryFormBuilder  $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(CountryFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
