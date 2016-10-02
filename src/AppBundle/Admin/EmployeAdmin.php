<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EmployeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('firstname', 'text')
            ->add('lastname')
            ->add('address')
            ->add('phoneCell')
            ->add('phoneHome')
            ->add('phoneWork')
            ->add('birthdate')
            ->add('gender')
            ->add('user', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\User',
                'property' => 'username'
            ));
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
            ->addIdentifier('gender')
            ->addIdentifier('user');
    }
}