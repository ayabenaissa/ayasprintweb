<?php

namespace FamilyBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FamilyBookBundle:Default:index.html.twig');
    }

    public function timelineAction()
    {
        return $this->render('FamilyBookBundle:front:timeline.html.twig');
    }
}
