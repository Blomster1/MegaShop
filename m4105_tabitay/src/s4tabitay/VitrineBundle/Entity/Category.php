<?php

namespace s4tabitay\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $oneToMany;


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
     * Set description
     *
     * @param string $description
     * @return Category
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set oneToMany
     *
     * @param string $oneToMany
     * @return Category
     */
    public function setOneToMany($oneToMany)
    {
        $this->oneToMany = $oneToMany;

        return $this;
    }

    /**
     * Get oneToMany
     *
     * @return string 
     */
    public function getOneToMany()
    {
        return $this->oneToMany;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $products;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add products
     *
     * @param \s4tabitay\VitrineBundle\Entity\Product $products
     * @return Category
     */
    public function addProduct(\s4tabitay\VitrineBundle\Entity\Product $products)
    {
        $this->products[] = $products;

        return $this;
    }
    
    /**
     * Remove products
     *
     * @param \s4tabitay\VitrineBundle\Entity\Product $products
     */
    public function removeProduct(\s4tabitay\VitrineBundle\Entity\Product $products)
    {
        $this->products->removeElement($products);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }
    /**
     * @var string
     */
    private $intitulé;


    /**
     * Set intitulé
     *
     * @param string $intitulé
     * @return Category
     */
    public function setIntitulé($intitulé)
    {
        $this->intitulé = $intitulé;

        return $this;
    }

    /**
     * Get intitulé
     *
     * @return string 
     */
    public function getIntitulé()
    {
        return $this->intitulé;
    }
    
    /**
     * 
     * @return type
     */
    public function __toString(){ // renvoyer une chaîne qui identifie de manière unique l’entité
        return $this->getIntitulé(); // si l’attribut Intitule est unique pour chaque catégorie...
    }

}
