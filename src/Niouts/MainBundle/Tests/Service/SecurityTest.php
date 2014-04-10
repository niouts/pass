<?php
namespace Niouts\MainBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

require_once __DIR__.'/../../../../../app/AppKernel.php';


class SecurityTest extends TestCase
{

    protected $_container;

    public function __construct()
    {
        $kernel = new \AppKernel("test", true);
        $kernel->boot();
        $this->_container = $kernel->getContainer();
        parent::__construct();
    }

    protected function get($service)
    {
        return $this->_container->get($service);
    }

    /**
     * @test
     */
    public function cryptAndDecrypt()
    {
        $serviceSecurity = $this->get('niouts.security');
        $chaineOrigine = 'Coucou Nicolas et Alexandre';
        
        //Crypt
        $chaineCrypt = $serviceSecurity->encrypt($chaineOrigine);
        //Décrypt
        $chaineRetour = $serviceSecurity->decrypt($chaineCrypt);
        
        $this->assertEquals($chaineOrigine, $chaineRetour); 
    }
}