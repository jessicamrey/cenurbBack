<?php

namespace App\Entity;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client extends BaseClient
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $randomId;
    
    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    protected $secret;
    
    /**
     * @var array
     * @ORM\Column(type="array")
     */
    protected $redirectUris = [];
    
    /**
     * @var array
     * @ORM\Column(type="array")
     */
    protected $allowedGrantTypes = [];

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * {@inheritdoc}
     */
    public function setRandomId($random)
    {
    	$this->randomId = $random;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getRandomId()
    {
    	return $this->randomId;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setSecret($secret)
    {
    	$this->secret = $secret;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getSecret()
    {
    	return $this->secret;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setRedirectUris(array $redirectUris)
    {
    	$this->redirectUris = $redirectUris;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getRedirectUris()
    {
    	return $this->redirectUris;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setAllowedGrantTypes(array $grantTypes)
    {
    	$this->allowedGrantTypes = $grantTypes;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getAllowedGrantTypes()
    {
    	return $this->allowedGrantTypes;
    }
}