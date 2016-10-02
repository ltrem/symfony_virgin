<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', 'text')
            ->add('client', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\Client',
                'property' => 'firstname'
            ))
            ->add('employe', 'sonata_type_model', array(
                'class' => 'AppBundle\Entity\Employe',
                'property' => 'firstname'
            ));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('client')
            ->add('employe');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->addIdentifier('client')
            ->addIdentifier('employe');
    }
}