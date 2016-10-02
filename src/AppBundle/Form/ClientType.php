<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('address', TextType::class, array(
                'required'  => false
            ))
            ->add('phoneCell', TextType::class)
            ->add('phoneHome', TextType::class, array(
                'required'  => false
            ))
            ->add('phoneWork', TextType::class, array(
                'required'  => false
            ))
            ->add('birthdate', DateTimeType::class, array(
                'attr' => array(
                    'class'=>'basedatetime'
                ),
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
            ))
            ->add('gender', TextType::class, array(
                'required'  => false
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Client'
        ));
    }
}
