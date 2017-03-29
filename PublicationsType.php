<?php

namespace FamilyBookEntityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('likes')
            ->add('contenuStatut',TextareaType::class,array('attr' => array('class' => 'form-control','placeholder'=>'place what you wish !!!!','rows'=>1,'cols'=>30), 'required'=> false))
            ->add('image',FileType::class,array('data_class' => null,'attr' => array('class' => 'btn btn-primary pull-right'), 'required'=> false))
            ->add('video',TextType::class,array('attr' => array('class' => 'form-control','placeholder'=>'place your video !!!!'), 'required'=> false))
            ->add('Publier',SubmitType::class,array('attr' => array('class' => 'btn btn-primary pull-right',)));
            //->add('datePub')
            //->add('dislike')
            //->add('idComm')
            //->add('idProche')        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FamilyBookEntityBundle\Entity\Publications'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'familybookentitybundle_publications';
    }


}
