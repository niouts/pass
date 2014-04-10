<?php

namespace Niouts\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class AccueilController extends Controller
{
	/**
     * @Route("/connexion", name="_connexion")
     * @Template()
     */
    public function connexionAction()
    {
        return array();
    }
    
    /**
     * @Route("/accueil", name="_accueil")
     * @Template()
     */
    public function accueilAction()
    {
    	return array();
    }
}
