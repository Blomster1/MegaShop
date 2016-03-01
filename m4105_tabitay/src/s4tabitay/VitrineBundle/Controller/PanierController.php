<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace s4tabitay\VitrineBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use s4tabitay\VitrineBundle\Entity\Panier;
use s4tabitay\VitrineBundle\Entity\Product;



/**
 * Description of panier
 *
 * @author tabitay
 */
class PanierController extends Controller{
    //put your code here
    
    public function contenuPanierAction()
    {
        $session = $this->getRequest()->getSession();
        $articles = $session->get('panier')->getArticles();
        foreach ($articles as $key => $value){
            $produits = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Product')->findById($key);
            var_dump($produits);
        }
        return $this->render('s4tabitayVitrineBundle:Default:contenuPanier.html.twig',array('articles' => $produits,'session_articles' => $articles,'panier' => $session->get('panier')));
    }
    
    public function ajouterUnArticleAction($id,$quantity)
    {
        $session = $this->getRequest()->getSession();
        if($session->get('panier') != NULL){
            $session->get('panier')->ajouterArticle($id,$quantity);
        } else {
            $session->set('panier', new Panier());
            $session->get('panier')->ajouterArticle($id,$quantity);
        }
        return $this->forward('s4tabitayVitrineBundle:Panier:contenuPanier');
    }
    
}
