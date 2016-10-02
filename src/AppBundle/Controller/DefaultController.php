<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('homepage.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/default_admin/", name="default_admin_page")
     */
    public function defaultAdminPageAction()
    {
        return $this->render('admin.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/client/", name="client_page")
     */
    public function clientPageAction()
    {
        return $this->render('client.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/login_ok/", name="login_ok")
     */
    public function showUserInfoAction()
    {
        return $this->render('login_success.html.twig');
    }

    /**
     * @Route("/user", name="user_info")
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function showUserAction()
    {
        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')){
            return $this->render('admin.html.twig');
        }
        if($this->get('security.authorization_checker')->isGranted('ROLE_CLIENT')){
            return $this->render('client.html.twig');
        }
    }

    /**
     * @Route("/user/profil", name="user_profil")
     * 
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */
    public function determineUser()
    {
        return $this->render('user.html.twig');
    }

}
