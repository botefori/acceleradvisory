<?php

namespace wagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('wagesBundle:Default:index.html.twig');
    }
}
