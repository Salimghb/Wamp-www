<?php

namespace ConciergerieBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class BouquetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

        -> add('libelle',
         TextType::class,
         array('label'=>false))

        -> add('tarif',
         NumberType::class,
         array('label'=>false))

        -> add('typesService',
         EntityType::class,
         array(                  
            'class'         => 'ConciergerieBundle:TypeService',
            'choice_label'  =>
            function ($typesService) {
                return "- ".
                ucfirst(strtolower($typesService->getLibelle()));
            },
            'query_builder' =>
            function ($repository) {
                return $repository
                -> createQueryBuilder('ts')
                -> orderBy('ts.libelle', 'ASC');
            },
            'label'         =>  false,
            'multiple'      =>  true,
            'placeholder'   => 'Choisissez les types de service mis à disposition'
            )
         );

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ConciergerieBundle\Entity\Bouquet'
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'conciergeriebundle_bouquet';
    }


}
