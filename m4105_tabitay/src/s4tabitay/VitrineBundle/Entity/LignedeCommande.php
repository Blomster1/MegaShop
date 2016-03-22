<?php

namespace s4tabitay\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LignedeCommande
 */
class LignedeCommande
{
    /**
     * @var \s4tabitay\VitrineBundle\Entity\Product
     */
    private $product;

    /**
     * @var \s4tabitay\VitrineBundle\Entity\Commande
     */
    private $commande;
    
    /**
     * @var integer
     */
    private $qte;

    /**
     * @var float
     */
    private $prix;
    
    

    function __construct() {
        
    }

    
    /**
     * Set qte
     *
     * @param integer $qte
     * @return LignedeCommande
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return LignedeCommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set product
     *
     * @param \s4tabitay\VitrineBundle\Entity\Product $product
     * @return LignedeCommande
     */
    public function setProduct(\s4tabitay\VitrineBundle\Entity\Product $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \s4tabitay\VitrineBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set commande
     *
     * @param \s4tabitay\VitrineBundle\Entity\Commande $commande
     * @return LignedeCommande
     */
    public function setCommande(\s4tabitay\VitrineBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \s4tabitay\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }
}
