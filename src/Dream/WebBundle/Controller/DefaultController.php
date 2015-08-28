<?php

namespace Dream\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DreamWebBundle:Default:index.html.twig');
    }
}
