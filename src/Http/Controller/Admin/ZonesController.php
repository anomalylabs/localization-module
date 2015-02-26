<?php namespace Anomaly\LocalizationModule\Http\Controller\Admin;

use Anomaly\LocalizationModule\Zone\Form\ZoneFormBuilder;
use Anomaly\LocalizationModule\Zone\Table\ZoneTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class ZonesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Http\Controller\Admin
 */
class ZonesController extends AdminController
{

    /**
     * Return an index of existing entries.
     *
     * @param ZoneTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(ZoneTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param ZoneFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(ZoneFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param ZoneFormBuilder     $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(ZoneFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
