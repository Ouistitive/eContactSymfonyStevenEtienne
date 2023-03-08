<?php

namespace App\Controller;

use App\Form\FormulaireUtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UtilisateurController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SessionInterface $session): Response
    {  
        return $this->redirectToRoute('login');
    }

    #[Route('/utilisateur/login', name: 'login')]
    public function ident(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $form = $this->createForm(FormulaireUtilisateurType::class);

        if(count($request->request->all()) == 0) {
            return $this->render('utilisateur/index.html.twig', [
                'formulaire' => $form->createView(),
                'message' => ''
            ]);
        }
        else {
            $repoUtilisateurs = $entityManager->getRepository(Utilisateur::class);
            $repoContacts = $entityManager->getRepository(Contact::class);

            $utilisateur = $repoUtilisateurs->getUser($request->request->all("formulaire_utilisateur")['Nom'], $request->request->all("formulaire_utilisateur")['Matricule']);

            if(!$utilisateur) {
                return $this->render('utilisateur/index.html.twig', [
                    'formulaire' => $form->createView(),
                    'message' => 'Erreur de saisie'
                ]);
            }

            $contacts = $repoContacts->getContactsById($utilisateur->getId());

            $session->set('utilisateur', $utilisateur);
            $session->set('contacts', $contacts);

            return $this->redirectToRoute('contacts');
        }
    }

    #[Route('/utilisateur/contacts', name: 'contacts')]
    public function contacts(SessionInterface $session): Response {
        if(!$session->get('utilisateur')) {
            return $this->redirectToRoute('login');
        }
        return $this->render('utilisateur/accueil.html.twig', [
            'nom' => $session->get('utilisateur')->getNom() . " " . $session->get('utilisateur')->getPrenom(),
            'utilisateurs' => $session->get('contacts')
        ]);
    }

    #[Route('/utilisateur/logout', name: 'logout')]
    public function deconnexion(SessionInterface $session): Response {
        $session->clear();
        return $this->redirectToRoute('login');
    }
}
