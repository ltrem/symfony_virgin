<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::Class, array(
                'label_format' => 'event.form.name'
            ))
            ->add('startTime', DateTimeType::class, array(
                'label_format' => 'event.form.startTime',
                'attr' => array(
                    'id'=>'form_startTime',
                    'class'=>'form_datetime'
                ),
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd hh:mm',
                'required' => true
            ))
            ->add('endTime', DateTimeType::class, array(
                'label' => false,
                'attr' => array(
                    'id'=>'form_endTime',
                    'class'=>'form_datetime hidden'
                ),
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd hh:mm',
                'required' => true
            ))
            ->add('categories', EntityType::class, array(
                'label_format' => 'event.form.categories',
                // query choices from this entity
                'class' => 'AppBundle:Category',

                // use the Category.name property as the visible option string
                'choice_label' => 'name',

                // used to render a select box, check boxes or radios
                'multiple' => true,
                'expanded' => true
            ));

    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event'
        ));
    }
}
