<?php namespace Anomaly\LocalizationModule\Http\Controller\Admin;

use Anomaly\LocalizationModule\State\Form\StateFormBuilder;
use Anomaly\LocalizationModule\State\Table\StateTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class StatesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Http\Controller\Admin
 */
class StatesController extends AdminController
{

    /**
     * Return an index of existing entries.
     *
     * @param StateTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(StateTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param StateFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(StateFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param StateFormBuilder    $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(StateFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
