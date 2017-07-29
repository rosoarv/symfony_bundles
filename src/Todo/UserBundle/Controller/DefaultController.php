<?php

namespace Todo\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
     * @Route("/", name="user_home")
     */
    public function indexAction()
    {
        return $this->render('TodoUserBundle:Default:index.html.twig');
    }
}
