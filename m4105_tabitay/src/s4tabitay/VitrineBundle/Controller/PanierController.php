<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace s4tabitay\VitrineBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use s4tabitay\VitrineBundle\Entity\Panier;
use s4tabitay\VitrineBundle\Entity\Commande;
use s4tabitay\VitrineBundle\Entity\Client;
use s4tabitay\VitrineBundle\Entity\LignedeCommande;
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
        return $this->render('s4tabitayVitrineBundle:Panier:contenuPanier.html.twig',array('articles' => $articles, 'panier' => $session->get('panier'),'user' => $this->getUserConnected()));

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
        return $this->render('s4tabitayVitrineBundle:Panier:infoPanier.html.twig',array('nbArticles' => $nbArticle, 'prix' => $prixPanier,'user' => $this->getUserConnected()));
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
    
    public function validerPanierAction(){
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $panier = $session->get('panier');
        
        $articles = $panier->getArticles();
        foreach ($articles as $id => $qte){
            $article[] = $em->getRepository('s4tabitayVitrineBundle:Product')->findOneById($id);
        }
        
        if($this->getUserConnected()){
            return $this->render('s4tabitayVitrineBundle:Panier:validation.html.twig', array('articles'=>$article,'panier'=>$panier,'user'=>$this->getUserConnected()));
        } else {
            return $this->redirectToRoute('client_authentification');
        }
        
    }

    

    public function commanderAction(){
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        $user = $this->getUserConnected();
        
        $commande = new Commande();
        $commande->setClient($user);
        $commande->setEtat(false);
        $em->persist($commande);
        
        $panier = $session->get('panier');
                
        $articles = $panier->getArticles();
        foreach ($articles as $id => $qte){
            $article = $em->getRepository('s4tabitayVitrineBundle:Product')->findOneById($id);
            $prix = $article->getPrice()*$qte;
            $lignedeCommande = new LignedeCommande();
            $lignedeCommande->setCommande($commande);
            $lignedeCommande->setQte($qte);
            $lignedeCommande->setPrix($prix);
            $lignedeCommande->setProduct($article);
            $em->persist($lignedeCommande);
            $em->flush();
        }
       
       $session->remove('panier');
       return  $this->redirectToRoute('s4tabitay_vitrine_homepage',array('user'=>$user->getId()));
        
    }

    private function getUserConnected(){
        
        $user_id = $this->getRequest()->getSession()->get('client_id');
        if($user_id != null){
            $user = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Client')->findOneById($user_id);
            return $user;
        } else {
            return false;
        }
        
    }
}
