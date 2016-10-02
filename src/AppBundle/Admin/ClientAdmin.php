<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ClientAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->with('General', array(
                    'class'       => 'col-md-6',
                    'box_class'   => 'box box-solid',
                ))
                    ->add('firstname', 'text')
                    ->add('lastname')
                    ->add('address')
                    ->add('phoneCell')
                    ->add('phoneHome')
                    ->add('phoneWork')
                    ->add('birthdate')
                    ->add('gender')
                    // ...
                ->end()
                ->with('Accès', array(
                    'class'       => 'col-md-6',
                    'box_class'   => 'box box-solid box-danger',
                ))
                    ->add('user', 'sonata_type_model', array(
                        'class' => 'AppBundle\Entity\User',
                        'property' => 'username'
                    ))
                    // ...
                ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstname');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('firstname')
            ->addIdentifier('lastname')
            ->addIdentifier('address')
            ->addIdentifier('phoneCell')
            ->addIdentifier('phoneHome')
            ->addIdentifier('phoneWork')
            ->addIdentifier('birthdate')
            ->addIdentifier('gender');
    }
}