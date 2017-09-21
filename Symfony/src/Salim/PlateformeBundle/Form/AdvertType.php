<?php

namespace Salim\PlateformeBundle\Form;

use Salim\PlateformeBundle\Repository\CategoryRepository;
use Salim\PlateformeBundle\Form\FormEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

    $pattern = 'D%';

    $builder
    -> add('title',     TextType::class)
    -> add('author',    TextType::class)
    -> add('content',   TextareaType::class)
    -> add('date',      DateTimeType::class)
    -> add('image',     ImageType::class)
    -> add(
            'categories',           // Nom du champ
            EntityType::class,      // Type du champ
            array(                  // Options du type du champ
              'class' => 'SalimPlateformeBundle:Category',
              'choice_label'  => 'name',
              'multiple'      => true,
              'query_builder' => 
              function(CategoryRepository $repository) use($pattern) 
              {
                return $repository -> getLikeQueryBuilder($pattern);
              }
              )
            )
    -> add('published', CheckboxType::class, array('required' => false))
    -> add('save',      SubmitType::class);

  }
  
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
    	$resolver->setDefaults(array(
    		'data_class' 
    		=> 'Salim\PlateformeBundle\Entity\Advert'
    		));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
    	return 'salim_plateformebundle_advert';
    }


  }
