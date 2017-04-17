<?php

namespace ValtonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ValtonsBundle:Default:index.html.twig');
    }
}
