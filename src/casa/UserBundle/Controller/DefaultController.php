<?php

namespace casa\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('casaUserBundle:Default:index.html.twig');
    }
}
