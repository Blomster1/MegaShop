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
        $session = $this->getRequest()->getSession();
        if($session->get('panier') != null){
            $panierArticles = $session->get('panier')->getArticles();
            foreach($panierArticles as $key => $value){
                $articles = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Product')->findById($key);
            }
            return $this->render('s4tabitayVitrineBundle:Defualt:contenuPanier.html.twig',array('articles' => $articles, 'panier' => $session->get('panier')));//retourné le panier
        }


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
    
}
