<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController
{
    /**
     * @Route(name="homepage")
     */
    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();
        return $this->render("pages/index.html.twig");
    }
}