<?php namespace Anomaly\LocalizationModule\Http\Controller\Admin;

use Anomaly\LocalizationModule\Language\Form\LanguageFormBuilder;
use Anomaly\LocalizationModule\Language\Table\LanguageTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;
use Illuminate\Routing\Redirector;

/**
 * Class LanguagesController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\LocalizationModule\Http\Controller\Admin
 */
class LanguagesController extends AdminController
{

    /**
     * Redirect to languages.
     *
     * @param Redirector $redirector
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(Redirector $redirector)
    {
        return $redirector->to('admin/localization/languages');
    }

    /**
     * Return an index of existing entries.
     *
     * @param LanguageTableBuilder $table
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function index(LanguageTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Return a form for a new entry.
     *
     * @param LanguageFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function create(LanguageFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Return a form for an existing entry.
     *
     * @param LanguageFormBuilder $form
     * @param                     $id
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(LanguageFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}
