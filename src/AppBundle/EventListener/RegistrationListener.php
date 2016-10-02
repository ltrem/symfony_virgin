<?php
/**
 * Created by PhpStorm.
 * User: LTrem
 * Date: 7/17/2016
 * Time: 2:03 PM
 */

namespace AppBundle\EventListener;

use AppBundle\Entity\Client;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class RegistrationListener implements EventSubscriberInterface {

    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'
        );
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $user = $event->getForm()->getData();

        // Assign roles to user
        $roles = array('ROLE_CLIENT');
        $user->setRoles($roles);

    }

} 