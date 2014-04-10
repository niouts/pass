<?php

namespace Niouts\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class AccesServiceController extends Controller
{
	/**
     * @Route("/", name="_srv_acces_")   
     * @Template()
     */
    public function executerAction()
    {
    	switch ($this->getRequest()->getMethod()) {
    		case 'GET':
    			return $this->connecterAcces();
    			break;
    	}
    	
    	throw new \Exception('Protocole interdit pour cette url');
    } 
    
    private function connecterAcces() 
    {
    	$server = $this->getRequest()->server;
		$id = $server->get('HTTP_ID', false);
		$code = $server->get('HTTP_CODE', false);
		$secu = $server->get('HTTP_SECU', false);
		$secufin = $server->get('HTTP_SECUFIN', false);
		$nom = $server->get('HTTP_NOM', false);
		$prenom = $server->get('HTTP_PRENOM', false);
		
		if (!$id || !$code || !$secu || !$secufin) {
			$retour = '0';
		} else {			
			$em = $this->getDoctrine()->getManager();
			
			$utilisateur = $em->getRepository('NioutsMainBundle:Utilisateur')->findOneByCode($code);
			$utilisateur->setNom($nom);
			$utilisateur->setPrenom($prenom);
			$utilisateur->setIntrappli($id);
			$em->flush();
			
			$retour = '1';				
		}
		
		
		$response = new Response(json_encode(array('connexion' => $retour)));
    	$response->headers->set('Content-Type', 'application/json');
    	return $response;
    }
}
