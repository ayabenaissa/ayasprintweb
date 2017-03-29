<?php

namespace FamilyBookEntityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FamilyBookEntityBundle:Default:index.html.twig');
    }
}
