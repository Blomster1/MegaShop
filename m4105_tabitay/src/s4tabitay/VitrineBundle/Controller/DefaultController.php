<?php

namespace s4tabitay\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        return $this->render('s4tabitayVitrineBundle:Default:catalogue.html.twig', array('produits' => array(
            'produit2' => array('prix' => 200, 'name' => "Produit2"),
            'produit3' => array('prix' => 300, 'name' => "Produit3"),
            'produit4' => array('prix' => 400, 'name' => "Produit4"),
            'produit5' => array('prix' => 500, 'name' => "Produit15"),           
            )));
    }
}
