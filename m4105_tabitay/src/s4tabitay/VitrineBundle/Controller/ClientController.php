<?php

namespace s4tabitay\VitrineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use s4tabitay\VitrineBundle\Entity\Client;
use s4tabitay\VitrineBundle\Form\ClientType;

/**
 * Client controller.
 *
 */
class ClientController extends Controller
{
    /**
     * Lists all Client entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clients = $em->getRepository('s4tabitayVitrineBundle:Client')->findAll();

        return $this->render('client/index.html.twig', array(
            'clients' => $clients,
        ));
    }

    /**
     * Creates a new Client entity.
     *
     */
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('s4tabitay\VitrineBundle\Form\ClientType', $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('client_show', array('id' => $client->getId()));
        }
        
        $this->getRequest()->getSession()->set('id_client', $client->getId());

        return $this->render('client/new.html.twig', array(
            'client' => $client,
            'form' => $form->createView(),
        ));
    }
    
    public function profilAction($id) {
        $user = $this->getUserConnected();
        
        if($user->getId() == $id){
            //traite la page
            $commandes = $this->getCommandesById($id);
            $lignesDeCommandes =  array();
            foreach ($commandes as $key => $value){
                $prix = 0;
                $ligneDeCommande = $this->getLigneCommandeByCommande($value->getId());
                foreach($ligneDeCommande as $key => $val){
                    $prix += $val->getPrix();
                }
                $lignesDeCommandes[$value->getId()] = $prix;             
            }
            return $this->render('client\profil.html.twig',array('commandes'=>$commandes,'lignesDeCommandes' => $lignesDeCommandes,'user'=>$user));
        } else {
            //Message d'erreur
            //return $this->render($route);
        }
    }
    
    public function authentificationAction(Request $request){
        if($this->getRequest()->getSession()->get('id_client') == null){
            $client = new Client();
            //Inscription
            $formInscription = $this->createForm('s4tabitay\VitrineBundle\Form\ClientType', $client);
            $formInscription->handleRequest($request);
            if ($formInscription->isSubmitted() && $formInscription->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($client);
                $em->flush();
                return $this->redirectToRoute('client_show', array('id' => $client->getId()));
            }


            //Connexion
            $form = $this->createFormBuilder($client)
               
               ->setMethod('POST')
               ->add('adressemail', 'text')
               ->add('password', 'text')
               ->add('save', 'submit', array('label' => 'Login'))
               ->getForm();
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $repository = $this->getDoctrine()
                                       ->getManager()
                                       ->getRepository('s4tabitayVitrineBundle:Client');
                $clientTest = $repository->findOneByAdressemail($client->getAdressemail());
                if($clientTest != null){
                    echo "test";
                    if($clientTest->getPassword() == $client->getPassword()){
                        $this->getRequest()->getSession()->set('client_id' ,$clientTest->getId());
                        return $this->redirectToRoute('s4tabitay_vitrine_homepage', array('client_id' => $client->getId()));
                    }
                }
                return $this->redirectToRoute('s4tabitay_vitrine_homepage');
            }
            return $this->render('client/authentification.html.twig',array('formInscription' => $formInscription->createView(), 'formConnexion' => $form->createView(),'user'=>$this->getUserConnected()));
        } else {
            return $this->redirectToRoute('s4tabitay_vitrine_homepage');
        }
        
    }

    /**
     * Finds and displays a Client entity.
     *
     */
    public function showAction(Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);

        return $this->render('client/show.html.twig', array(
            'client' => $client,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Client entity.
     *
     */
    public function editAction(Request $request, Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('s4tabitay\VitrineBundle\Form\ClientType', $client);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('client_edit', array('id' => $client->getId()));
        }

        return $this->render('client/edit.html.twig', array(
            'client' => $client,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    
    /**
     * Logout a Client entity.
     *
     */
    public function logoutAction(){
        $session = $this->getRequest()->getSession();
        $session->remove('client_id');
        $session->remove('panier');
        return $this->redirectToRoute('s4tabitay_vitrine_homepage', array('user' => $this->getUserConnected()));
    }
    
    
    /**
     * Deletes a Client entity.
     *
     */
    public function deleteAction(Request $request, Client $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush();
        }

        return $this->redirectToRoute('client_index');
    }

    /**
     * Creates a form to delete a Client entity.
     *
     * @param Client $client The Client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
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
    
    private function getLigneCommandeByCommande($id){
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('s4tabitayVitrineBundle:LignedeCommande')->findByCommande($id);
    }
    
    private function getCommandesById($id){
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('s4tabitayVitrineBundle:Commande')->findByClient($id);
    }
}
