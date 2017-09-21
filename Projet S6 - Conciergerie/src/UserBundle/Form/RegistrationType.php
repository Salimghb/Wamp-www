<?php
// src/UserBundle/Form/RegistrationType.php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use UserBundle\Form\EntrepriseType;
use UserBundle\Form\SalarieType;
use UserBundle\Form\PrestataireType;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      if ($options['label']=='Entreprise')
      {
        $builder->add('entreprise', EntrepriseType::class, array('label'=>false));
      }
      elseif ($options['label']=='Prestataire') {
        $builder->add('prestataire', PrestataireType::class, array('label'=>false));
      }
      elseif ($options['label']=='Salarie') {
        $builder->add('salarie', SalarieType::class, array('label'=>false));
      }

    }

    public function getParent()
    {
      return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }

}
