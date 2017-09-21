<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class AdresseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
        ->add('num', IntegerType::class, 
            array('label' => false))

        ->add('rue', TextType::class, 
            array('label' => false))

        ->add('ville', TextType::class, 
            array('label' => false))

        ->add('codePostal', IntegerType::class, 
            array('label' => false))

        ->add('numAppart', IntegerType::class, 
            array('label' => false, 'required' => false))

        ->add('etage', IntegerType::class, 
            array('label' => false, 'required' => false))

        ->add('complements', TextType::class, 
            array('label' => false, 'required' => false));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Adresse'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_adresse';
    }

}
