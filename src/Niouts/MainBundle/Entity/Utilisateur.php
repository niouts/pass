<?php

namespace Niouts\MainBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Utilisateur
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Niouts\MainBundle\Entity\UtilisateurRepository")
 */
class Utilisateur implements AdvancedUserInterface, \Serializable
{
    /**
     * @var smallint
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=false)
     *
     * @Assert\NotBlank(message="utilisateur.code.vide") 
     * @Assert\Length(
     *      min = "3",
     *      max = "20",
     *      minMessage = "utilisateur.code.min",
     *      maxMessage = "utilisateur.code.max"
     * )
     * @Assert\Regex(pattern="/^[\w-]+$/", message="utilisateur.code.regex")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=32, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     *
     * @Assert\NotBlank(message="utilisateur.nom.vide") 
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "utilisateur.nom.min",
     *      maxMessage = "utilisateur.nom.max"
     * )
     * @Assert\Regex(pattern="/^[\w çàâäéèêëîïôöùûü'-]+$/", message="utilisateur.nom.regex")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     *
     * @Assert\NotBlank(message="utilisateur.prenom.vide") 
     * @Assert\Length(
     *      min = "2",
     *      max = "50",
     *      minMessage = "utilisateur.prenom.min",
     *      maxMessage = "utilisateur.prenom.max"
     * )
     * @Assert\Regex(pattern="/^[\w çàâäéèêëîïôöùûü'-]+$/", message="utilisateur.prenom.regex")
     */
    private $prenom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="admin", type="boolean", nullable=false)
     */
    private $admin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="initpassword", type="boolean", nullable=false)
     */
    private $initpassword;
    

    /**
     * @ORM\OneToMany(targetEntity="Niouts\MainBundle\Entity\Identifiant", mappedBy="utilisateur")
     */
    private $identifiants;
    
    
    
public function __construct()
  	{
  		$this->initSalt();
  		$this->initpassword = false;
  	}
  
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
     * Set code
     *
     * @param string $code
     * @return Utilisateur
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Initialisation du password
     * @return Utilisateur 
     */
    public function initPassowrd()
    {
    	$digest =  hash('sha1', $this->code.'{'.$this->salt.'}', true);
    	$this->setPassword(bin2hex($digest));
    
        return $this;
    }
    
    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     * @return Utilisateur
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    
        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean 
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set admin
     *
     * @param boolean $admin
     * @return Utilisateur
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return boolean 
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set initpassword
     *
     * @param boolean $initpassword
     * @return Utilisateur
     */
    public function setInitpassword($initpassword)
    {
        $this->initpassword = $initpassword;
    
        return $this;
    }

    /**
     * Get initpassword
     *
     * @return boolean 
     */
    public function getInitpassword()
    {
        return $this->initpassword;
    }
    
    
    /* (non-PHPdoc)
	 * @see Serializable::serialize()
	 */
	public function serialize() {
		return serialize(array(
            $this->id,
        ));
	}

	/* (non-PHPdoc)
	 * @see Serializable::unserialize()
	 */
	public function unserialize($serialized) {
		list (
            $this->id,
        ) = unserialize($serialized);
	}
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\UserInterface::getRoles()
	 */
	public function getRoles() {
		$role = ($this->admin) ? 'ROLE_ADMIN' : 'ROLE_USER';
		return array($role);
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\UserInterface::getSalt()
	 */
	public function getSalt() {
		return $this->salt;		
	}

	/**
  	 * Initialisation du salt
  	 * return Utilisateur 
  	 */
  	public function initSalt()
  	{
  		$this->salt = md5(uniqid(null, true));
  		return $this;
  	}
  	
  	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\UserInterface::getUsername()
	 */
	public function getUsername() {
		return $this->code;		
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\UserInterface::eraseCredentials()
	 */
	public function eraseCredentials() {
		// TODO Auto-generated method stub
		
	}
	
	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonExpired()
	 */
	public function isAccountNonExpired() {
		return true;		
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonLocked()
	 */
	public function isAccountNonLocked() {
		return true;
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isCredentialsNonExpired()
	 */
	public function isCredentialsNonExpired() {
		return true;
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isEnabled()
	 */
	public function isEnabled() {
		return $this->actif;		
	}
	
	
	/**
	 * Add identifiant
	 * @param Identifiant $identifiant
	 * @return \Niouts\MainBundle\Entity\Poste
	 */
	public function addIdentifiant(Identifiant $identifiant)
	{
		$this->identifiants[] = $identifiant;
		$identifiant->setPoste($this);
		return $this;
	}
	
	/**
	 * remove identifiant
	 * @param Identifiant $identifiant
	 */
	public function removeIdentifiant(Identifiant $identifiant)
	{
		$this->identifiants->removeElement($identifiant);
	}
	
	/**
	 * Get identifiants
	 * @param int $type
	 * @return Identifiant[]
	 */
	public function getIdentifiants()
	{
		return $this->identifiants;
	}
}
