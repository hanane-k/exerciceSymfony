<?php
namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\Routing\Annotation\Route ;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils ;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Security\LoginAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login ( AuthenticationUtils $authenticationUtils ) : Response
    {
        $user = new user();
        // get the login error if there is one
        $error = $authenticationUtils -> getLastAuthenticationError ();
        // last username entered by the user
        $lastUsername = $authenticationUtils -> getLastUsername ();

        return $this -> render ( 'security/login.html.twig' , [
            'last_username' => $lastUsername ,
            'error' => $error
        ]);
        $hasAccess = $this -> isGranted ( 'ROLE_ADMIN' );
        $this -> denyAccessUnlessGranted ( 'ROLE_ADMIN' );

    }
    /**
     * @Route("/addUser", name="app_add")
     */
    // fonction pour ajouter un user

    // public function addUser (UserPasswordEncoderInterface $encoder) {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $user = new User();
    //     $user->setName("haha") ;
    //     $encoded = $encoder->encodePassword($user, "Hanane");
    //     $user->setPassword($encoded);
    //     $user->setRoles(["ROLE_ADMIN"]);
    //     $entityManager->persist($user);        
    //     $entityManager->flush();
    // }

    /**
    * @Route("/logout", name="app_logout")
    */
   public function logout()
   {
       throw new \Exception('Don\'t forget to activate logout in security.yaml');
   }
}