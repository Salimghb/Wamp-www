<?php

namespace ConciergerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ServiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        -> add('libelle',TextType::class)
        -> add('tarif', MoneyType::class, array('currency'=>'false'))
        -> add('description',TextareaType::class)
        -> add('type', EntityType::class, array(
            'class'   => 'ConciergerieBundle:TypeService',
            'choice_label'  => 'libelle',
            'multiple' => false,
            'expanded' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver -> setDefaults(array(
            'data_class' => 'ConciergerieBundle\Entity\Service'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'conciergeriebundle_service';
    }


}
