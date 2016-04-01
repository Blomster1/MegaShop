<?php

namespace s4tabitay\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use s4tabitay\VitrineBundle\Entity\Category;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('s4tabitayVitrineBundle:Default:index.html.twig', array('name' => $name ,'user' => $this->getUserConnected()));      
    }
    
    public function mentionsAction()
    {
        return $this->render('s4tabitayVitrineBundle:Default:mentions.html.twig');
    }
    public function catalogueAction()
    {
        $categories = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Category')->findAll();
        if (!$categories) {
            throw $this->createNotFoundException('Pas de categories trouvées');
        }
        return $this->render('s4tabitayVitrineBundle:Default:catalogue.html.twig',array('categories' => $categories,'user' => $this->getUserConnected()));
    }
    
    public function articleParCategorieAction($cat){
        $category = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Category')->findById($cat);
        $produits = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Product')->findByCategory($cat);
        if (!$produits) {
            throw $this->createNotFoundException('Pas de categories trouvées');
        }
        return $this->render('s4tabitayVitrineBundle:Default:produitsParCategories.html.twig',array('produits' => $produits,'user' => $this->getUserConnected()));
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

    public function getCategoryAction(){
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('s4tabitayVitrineBundle:Category')->findAll();
        return $this->render('s4tabitayVitrineBundle:partials:categoryMenu.html.twig', array('categories'=>$categories));
    }
}
