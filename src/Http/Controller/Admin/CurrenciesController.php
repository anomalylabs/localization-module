<?php namespace Anomaly\LocalizationModule\Http\Controller\Admin;

use Anomaly\LocalizationModule\Currency\Form\CurrencyFormBuilder;
use Anomaly\LocalizationModule\Currency\Table\CurrencyTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class CurrenciesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Http\Controller\Admin
 */
class CurrenciesController extends AdminController
{

    /**
     * Return an index of existing entries.
     *
     * @param CurrencyTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(CurrencyTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param CurrencyFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(CurrencyFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param CurrencyFormBuilder $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(CurrencyFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
