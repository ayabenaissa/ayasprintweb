<?php

namespace FamilyBookBundle\Controller;

use FamilyBookBundle\FamilyBookBundle;
use FamilyBookEntityBundle\Entity\Proches;
use FamilyBookEntityBundle\Entity\Publications;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Publication controller.
 *
 */
class PublicationsController extends Controller
{
    /**
     * Lists all publication entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publications = $em->getRepository('FamilyBookEntityBundle:Publications')->findAll();

        return $this->render('FamilyBookBundle:Default:index.html.twig', array(
            'publications' => $publications,
        ));
    }

    /**
     * Creates a new publication entity.
     *
     */
    public function newAction(Request $request)
    {
        $publication = new Publications();
        $form = $this->createForm('FamilyBookEntityBundle\Form\PublicationsType', $publication);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
//        suppression
        if ($request->get('delete')!= null)
        {
            $publication= $em->getRepository('FamilyBookEntityBundle:Publications')->find($request->get('delete'));
            $em->remove($publication);
            $em->flush($publication);
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $publication->setDatePub(new \DateTime('now'));
            $em->persist($publication);
            $em->flush($publication);

            return $this->redirectToRoute('publications_new');
        }


//          affichage
        $em = $this->getDoctrine()->getManager();
        $publications = $em->getRepository('FamilyBookEntityBundle:Publications')->findAll();

        return $this->render('FamilyBookBundle:publications:new.html.twig', array(

            'publication' => $publication,
            'form' => $form->createView(),
            'publications' => $publications,

        ));
    }

    /**
     * Finds and displays a publication entity.
     *
     */
    public function showAction(Publications $publication)
    {
        $deleteForm = $this->createDeleteForm($publication);

        return $this->render('FamilyBookBundle:publications:show.html.twig', array(
            'publication' => $publication,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing publication entity.
     *
     */
    public function editAction(Request $request, Publications $publication)
    {
        $deleteForm = $this->createDeleteForm($publication);
        $editForm = $this->createForm('FamilyBookEntityBundle\Form\PublicationsType', $publication);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publications_new');
        }

        return $this->render('FamilyBookBundle:publications:edit.html.twig', array(
            'publication' => $publication,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publication entity.
     *
     */
    public function deleteAction(Request $request, Publications $publication)
    {
        $form = $this->createDeleteForm($publication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publication);
            $em->flush($publication);
        }

        return $this->redirectToRoute('publications_index');
    }

    /**
     * Creates a form to delete a publication entity.
     *
     * @param Publications $publication The publication entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Publications $publication)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('publications_delete', array('id' => $publication->getIdPublication())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    public function ProfilNewAction(Request $request)
    {
        $publication = new Publications();
        $form = $this->createForm('FamilyBookEntityBundle\Form\PublicationsType', $publication);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
//        suppression
        if ($request->get('delete')!= null)
        {
            $publication= $em->getRepository('FamilyBookEntityBundle:Publications')->find($request->get('delete'));
            $em->remove($publication);
            $em->flush($publication);
        }


//          affichage
        $em = $this->getDoctrine()->getManager();
        $publications = $em->getRepository('FamilyBookEntityBundle:Publications')->findBy(array('idProche'=>$this->getUser()));

        return $this->render('FamilyBookBundle:front:timeline.html.twig', array(

            'publication' => $publication,
            'form' => $form->createView(),
            'publications' => $publications,

        ));
    }
}
