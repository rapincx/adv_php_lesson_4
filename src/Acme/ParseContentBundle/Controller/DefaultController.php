<?php

namespace Acme\ParseContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeParseContentBundle:Default:index.html.twig');
    }
}
