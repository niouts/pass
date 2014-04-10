<?php
namespace Niouts\MainBundle\Features\Context;

use Symfony\Component\HttpKernel\KernelInterface;
use Behat\Symfony2Extension\Context\KernelAwareInterface;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\BehatContext, Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode, Behat\Gherkin\Node\TableNode;
use Niouts\MainBundle\Entity\Utilisateur;
use Behat\Mink\Exception\Exception;

//
// Require 3rd-party libraries here:
//
// require_once 'PHPUnit/Autoload.php';
// require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends MinkContext implements KernelAwareInterface
{

    private $kernel;

    private $parameters;

    /**
     * Initializes context with parameters from behat.yml.
     *
     * @param array $parameters            
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Sets HttpKernel instance.
     * This method will be automatically called by Symfony2Extension ContextInitializer.
     *
     * @param KernelInterface $kernel            
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @Given /^Je suis connecté entant que "([^"]*)"$/
     */
    public function jeSuisConnecteEntantQue($arg1)
    {
        $this->visit('/connexion');
        
        $this->fillField('_username', $arg1);
        $this->fillField('_password', $arg1);
        $this->pressButton('Valider');
        
        $this->assertElementContainsText('title', 'Accueil');
        $this->assertElementContainsText('body header div#headerBlocDroite p', $arg1);
    }

    /**
     * @Given /^La base de données est propre$/
     */
    public function laBaseDeDonneesEstPropre()
    {
        $entities = $this->kernel->getContainer()
            ->get('doctrine')
            ->getManager()
            ->getRepository('NioutsMainBundle:Identifiant')
            ->findAll();
        foreach ($entities as $eachEntity) {
            $this->kernel->getContainer()
                ->get('doctrine')
                ->getManager()
                ->remove($eachEntity);
        }
        
        $this->kernel->getContainer()
            ->get('doctrine')
            ->getManager()
            ->flush();
    }

    /**
     * @When /^Je clique sur le lien "([^"]*)"$/
     */
    public function jeCliqueSurLeLien($arg1)
    {
        $this->clickLink($arg1);
    }

    /**
     * @When /^Je me rends à l\'adresse "([^"]*)"$/
     */
    public function jeMeRendsALAdresse($arg1)
    {
        $this->visit($arg1);
    }

    /**
     * @Then /^Un lien permettant de créer un identifiant est disponible$/
     */
    public function unLienPermettantDeCreerUnIdentifiantEstDisponible()
    {
        $this->assertElementOnPage('.btnAjouter');
    }

    /**
     * @When /^Je remplis le champ "([^"]*)" avec la valeur "([^"]*)"$/
     */
    public function jeRemplisLeChampAvecLaValeur($arg1, $arg2)
    {
        $this->fillField($arg1, $arg2);
    }

    /**
     * @Given /^Je valide le formulaire$/
     */
    public function jeValideLeFormulaire()
    {
        $this->pressButton('Valider');
    }

    /**
     * @Then /^La liste des identifiants s\'affiche sous forme de tableau$/
     */
    public function laListeDesIdentifiantsSAfficheSousFormeDeTableau()
    {
        $this->assertElementOnPage('table.dataTable');
    }

    /**
     * @Given /^L\'identifiant "([^"]*)" est affiché dans le tableau$/
     */
    public function lIdentifiantEstAfficheDansLeTableau($arg1)
    {
        $this->assertElementContainsText('table.dataTable tbody', $arg1);
    }

    /**
     * @Given /^je me déconnecte$/
     */
    public function jeMeDeconnecte()
    {
        $this->clickLink('deconnexion');
    }

    /**
     * @Given /^L\'identifiant "([^"]*)" n\'est pas affiché dans le tableau$/
     */
    public function lIdentifiantNEstPasAfficheDansLeTableau($arg1)
    {
        $this->assertElementNotContainsText('table.dataTable tbody', $arg1);
    }

    /**
     * @Given /^Un lien "([^"]*)" est présent devant chaque identifiant$/
     */
    public function unLienEstPresentDevantChaqueIdentifiant($arg1)
    {
        $btnModifier = $this->getSession()
            ->getPage()
            ->findAll('css', '.btn'.$arg1);
        $tr = $this->getSession()
            ->getPage()
            ->findAll('css', 'table tbody tr');
        
        if (count($btnModifier) != count($tr)) {
            throw new \Exception('Pas de lien devant chaque identifiant');
        }
    }

    /**
     * @When /^Je clique sur le lien "([^"]*)" en face de l\'identifiant "([^"]*)"$/
     */
    public function jeCliqueSurLeLienEnFaceDeLIdentifiant($arg1, $arg2)
    {
        $tr = $this->getSession()
            ->getPage()
            ->findAll('css', 'table tbody tr');
        
        foreach($tr as $ligne) {
            if (strstr($ligne->getText(), $arg2) === false) {
                continue;
            }
            
            $ligne->clickLink($arg1);            
        }  
    }

    /**
     * @Then /^Le formulaire de saisie d\'un identifiant s\'affiche$/
     */
    public function leFormulaireDeSaisieDUnIdentifiantSAffiche()
    {
        $this->assertElementOnPage('form');        
        $this->assertElementContainsText('title', ' un identifiant');
    }

    /**
     * @Then /^Un message d\'erreur relatif au formulaire s\'affiche$/
     */
    public function unMessageDErreurRelatifAuFormulaireSAffiche()
    {
        $this->assertElementOnPage('li');        
    }
    
    /**
     * @Then /^Le message "([^"]*)" s\'affiche$/
     */
    public function leMessageSAffiche($arg1)
    {
        $this->assertElementContainsText('div.flash_notice', $arg1);
    }
}
