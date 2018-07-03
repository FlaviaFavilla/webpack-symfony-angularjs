<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController
{
    /**
     * @Route(name="homepage")
     */
    public function indexAction()
    {
        return $this->render("pages/index.html.twig");
    }

    /**
     * @Route({
     *     "it": "/prodotti",
     *     "en": "/products"
     * }, name="products")
     */
    public function productsAction()
    {
        return $this->render("pages/products.html.twig");
    }
}