<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace s4tabitay\VitrineBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use s4tabitay\VitrineBundle\Entity\Panier;
use Symfony\Component\BrowserKit\Request;


/**
 * Description of panier
 *
 * @author tabitay
 */
class PanierController extends Controller{
    //put your code here
    
    public function contenuPanierAction()
    {
        $articles = array();
        $session = $this->getRequest()->getSession();
        if($session->get('panier') != null){
            $panierArticles = $session->get('panier')->getArticles();
            foreach($panierArticles as $key => $value){
                $articles[] = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Product')->findOneById($key);
            }
        }
        return $this->render('s4tabitayVitrineBundle:Panier:contenuPanier.html.twig',array('articles' => $articles, 'panier' => $session->get('panier')));

    }
    
    public function infoPanierAction(){
        $prixPanier=0;
        $nbArticle=0;
        $session = $this->getRequest()->getSession();
        if($session->get('panier') != null){
            $panierArticles = $session->get('panier')->getArticles();
            $nbArticle = sizeof($panierArticles);
            foreach($panierArticles as $key => $value){
                $articles[] = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Product')->findOneById($key);
            }
            $prixPanier = $session->get('panier')->getPrixTotal($articles);
        }
        return $this->render('s4tabitayVitrineBundle:Panier:infoPanier.html.twig',array('nbArticles' => $nbArticle, 'prix' => $prixPanier));
    }

    /**
     * @param $id
     * @param $quantity
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ajouterArticlesAction($id, $quantity)
    {
        $session = $this->getRequest()->getSession();
        if($session->get('panier') != NULL){
            $session->get('panier')->ajouterArticle($id,$quantity);
        } else {
            $session->set('panier', new Panier());
            $session->get('panier')->ajouterArticle($id,$quantity);
        }
        return $this->redirectToRoute('s4tabitay_vitrine_panier');
    }

    public function ajouterUnArticleAction($id, $quantity)
    {
        $session = $this->getRequest()->getSession();
        if($session->get('panier') != NULL){
            $session->get('panier')->ajouterArticle($id,$quantity);
        } else {
            $session->set('panier', new Panier());
            $session->get('panier')->ajouterArticle($id,$quantity);
        }
        return $this->redirectToRoute('s4tabitay_vitrine_panier');
    }

    public function viderPanierAction(){
        $this->getRequest()->getSession()->remove('panier');
        return $this->redirectToRoute('s4tabitay_vitrine_panier');
    }
    
    
    public function validationPanierAction(){
        
    }
}
