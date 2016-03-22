<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of panier
 *
 * @author tabitay
 */

namespace s4tabitay\VitrineBundle\Entity;

//use Doctrine\ORM\Mapping as ORM;

class Panier{
    //put your code here

    
    private $articles;
    private $prix;
    
    function getArticles() {
        return $this->articles;
    }

    
    function getPrixArticles($id,$prixUnitaire){
        return $this->articles["$id"]*$prixUnitaire;
    }
    
    function getPrixTotal($articles){
        $prixTotal=0;
        foreach($articles as $key => $value){
            $prixTotal =$prixTotal + $value->getPrice();
        }
        return $prixTotal;
    }

    function setArticles($articles) {
        $this->articles = $articles;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function ajouterArticle($id,$quantity){
        if(isset($this->articles["$id"])){
            $this->articles["$id"]++;
        } else {
            $this->articles["$id"] = $quantity;
        }
    }

    function getQuantity($id){
        return $this->articles["$id"];
    }
    
    function setQuantity($id,$quantity){
        $this->articles["$id"] = $quantity;
    }
    
}
