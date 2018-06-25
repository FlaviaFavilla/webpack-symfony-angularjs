<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends BaseController
{
    /**
     * @Route("/{_locale}/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render("pages/index.html.twig");
    }
}