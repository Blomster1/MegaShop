<?php

namespace s4tabitay\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $adressemail;


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
     * Set nom
     *
     * @param string $nom
     * @return Client
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
     * Set adressemail
     *
     * @param string $adressemail
     * @return Client
     */
    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;

        return $this;
    }

    /**
     * Get adressemail
     *
     * @return string 
     */
    public function getAdressemail()
    {
        return $this->adressemail;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $commande;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commande
     *
     * @param \s4tabitay\VitrineBundle\Entity\commande $commande
     * @return Client
     */
    public function addCommande(\s4tabitay\VitrineBundle\Entity\commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \s4tabitay\VitrineBundle\Entity\commande $commande
     */
    public function removeCommande(\s4tabitay\VitrineBundle\Entity\commande $commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommande()
    {
        return $this->commande;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString(){ // renvoyer une chaîne qui identifie de manière unique l’entité
        return $this->getId(); // si l’attribut Intitule est unique pour chaque catégorie...
    }
}
