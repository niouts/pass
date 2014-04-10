<?php

namespace Niouts\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Niouts\MainBundle\Entity\Identifiant;
use Niouts\MainBundle\Form\IdentifiantType;

class IdentifiantController extends Controller
{
	/**
     * @Route("/identifiants", name="_identifiants")
     * @Template()
     */
    public function listerAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$reposi = $em->getRepository('NioutsMainBundle:Identifiant');
    	
    	if ($this->getRequest()->isMethod('POST')) {
    		$action = $this->getRequest()->get('typeAction', '');
    		$id = $this->getRequest()->get('id', 0);
    	
	    	switch($action) {
	    		case 'ajout':
	    		case 'modi':
	    			$this->get('session')->set('identifiant.id', $id);
	    			return $this->redirect($this->generateUrl('_identifiant'));
	    			break;
	    		case 'supp': 
	    			$identifiant = $reposi->find($id);
	    			$em->remove($identifiant);
	    			$em->flush();
	    			$this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('identifiant.message.supprimer'));
    				break;
	    	}
    	}
    	
    	$liste = $reposi->findByUtilisateur($this->get('security.context')->getToken()->getUser()->getId());
    	
    	return array('liste' => $liste);
    }
    
    
    /**
     * @Route("/identifiant/{id}", name="_identifiant")
     * @Template()
     */
    public function editerAction($id=null)
    {
    	$messages = array();
    	$srvSecu = $this->get('niouts.security');
    	 
    	$em = $this->getDoctrine()->getManager();
    
    	if ($id > 0) {
    		$identifiant = $em->getRepository('NioutsMainBundle:Identifiant')->find($id);
    		
    		if(!is_null($identifiant)) {
    		    $identifiant->setContenu($srvSecu->decrypt($identifiant->getContenu()));
    		} else {
    		    $id = 0;    		    
    		}
    	}
    	  		 
    	if ($id <= 0) {
    		$identifiant = new Identifiant();
    		$identifiant->setUtilisateur($this->get('security.context')->getToken()->getUser());
    	}

    	$form = $this->createForm(new IdentifiantType(), $identifiant);
    	 
    	if ($this->getRequest()->isMethod('POST')) {
    		$form->bind($this->getRequest());
    		if ($form->isValid()) {
    			if ($id == 0) {
    				$em->persist($identifiant);
    			}

    			$identifiant->setContenu($srvSecu->encrypt($identifiant->getContenu()));    			
    			$em->flush();    			
    			$identifiant->setContenu($srvSecu->decrypt($identifiant->getContenu()));    			
    			
    			if ($id == 0) {
    				$this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('identifiant.message.ajouter'));
    				return $this->redirect($this->generateUrl('_identifiants'));
    			} else {
    				$this->get('session')->getFlashBag()->add('notice', $this->get('translator')->trans('identifiant.message.modifier'));
    			}
    		}
    	}
    	 
    	return array('editer' => ($id!=0), 'form' => $form->createView());
    }
    
    
}
