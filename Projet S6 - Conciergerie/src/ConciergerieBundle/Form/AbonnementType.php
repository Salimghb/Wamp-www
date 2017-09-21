<?php

namespace ConciergerieBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AbonnementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        -> add(
            'bouquet',              // Nom du champ
            EntityType::class,      // Type du champ
            array(                  // Options du type du champ
                'class'         => 'ConciergerieBundle:Bouquet',
                'choice_label'  => 
                function ($bouquet) {
                    return "Le bouquet '".$bouquet->getLibelle()."' au tarif mensuel de ".$bouquet->getTarif()."€";
                },
                'label'         =>  false,
                'multiple'      =>  false,
                'placeholder'   => 'Choisissez un bouquet'
                )
            )

        -> add('dureeAbo'   , IntegerType::class,   
            array(
                'label' => false,
                'attr'  => array('min'=>1, 'max'=>24)
                )
            )
        -> add('dateDebut'  , DateType::class,      
            array(
                'label'  => false,
                'widget' => 'choice', 
                'years'  => range(date('Y'), date('Y')+5)
                )
            );
        
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver -> setDefaults(array(
            'data_class' => 'ConciergerieBundle\Entity\Abonnement'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'conciergeriebundle_abonnement';
    }


}
