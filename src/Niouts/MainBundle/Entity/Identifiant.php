<?php

namespace Niouts\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Identifiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Niouts\MainBundle\Entity\IdentifiantRepository")
 */
class Identifiant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
   	 * @ORM\ManyToOne(targetEntity="Niouts\MainBundle\Entity\Utilisateur", inversedBy="identifiants")
   	 * @ORM\JoinColumn(nullable=false)
   	 */
  	private $utilisateur;
  
  	/**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50)
     * 
     * @Assert\NotBlank(message="identifiant.libelle.vide") 
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "identifiant.libelle.min",
     *      maxMessage = "identifiant.libelle.max"
     * )
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utilisateur
     *
     * @param Niouts\MainBundle\Entity\Utilisateur $utilisateur
     */
  	public function setUtilisateur(\Niouts\MainBundle\Entity\Utilisateur $utilisateur)
  	{
    	$this->utilisateur = $utilisateur;
  	}
 
  	/**
     * Get utilisateur
   	 *
   	 * @return Niouts\DataBundle\Entity\Utilisateur
   	 */
  	public function getUtilisateur()
  	{
    	return $this->utilisateur;
  	}
  	
  	/**
     * Set libelle
     *
     * @param string $libelle
     * @return Identifiant
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Identifiant
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
