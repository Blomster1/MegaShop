<?php

namespace s4tabitay\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use s4tabitay\VitrineBundle\Entity\Category;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('s4tabitayVitrineBundle:Default:index.html.twig', array('name' => $name));
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
        return $this->render('s4tabitayVitrineBundle:Default:catalogue.html.twig',array('categories' => $categories));
    }
    
    public function articleParCategorieAction($cat){
        $category = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Category')->findById($cat);
        $produits = $this->getDoctrine()->getManager()->getRepository('s4tabitayVitrineBundle:Product')->findByCategory($cat);
        if (!$produits) {
            throw $this->createNotFoundException('Pas de categories trouvées');
        }
        return $this->render('s4tabitayVitrineBundle:Default:produitsParCategories.html.twig',array('produits' => $produits));
    }
}
