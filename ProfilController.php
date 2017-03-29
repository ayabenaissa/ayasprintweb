<?php

namespace FamilyBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfilController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publications = $em->getRepository('FamilyBookEntityBundle:Publications')->findAll();

        return $this->render('FamilyBookBundle:Default:Layout.html.twig', array(
            'publications' => $publications,
        ));
    }


}
