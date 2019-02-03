<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\article;
use App\Repository\articleRepository;
use App\servises\pasInsulte;

class accueilController extends AbstractController
{

    // une fonction qui contient:
        // la route vers l'accueil
    /**
    * @Route("/liste", name="list_liste")
    */
        // la fonction list du controller
    public function list() {
        $article = new article();
        echo "<h2 class='text-center m-5 border-bottom border-dark pb-5'>la page qui affiche la liste des articles</h2>";
        $articleManager = $this->getDoctrine()->getRepository(article::class);
        $articles = $articleManager->findById();
        return $this->render('listeView.html.twig', ['articles' => $articles]);
    }


    # une fonction qui contient:
        # la route vers la page singel
    /**
    * @Route("/single/{id}", name="app_single", requirements={"id"="\d+"})
    */
        # la fonction qui affiche un article 
        public function single($id) {
            // $article = new article();
            $articleManager = $this->getDoctrine()->getRepository(article::class);
            echo "<h2 class='text-center m-5 border-bottom border-dark pb-5'>Article N° : $id</h2>";
            $article = $articleManager->find($id);
            $Contenu = $article->getContenu();
            // if(pasInsultes($article->getContenu())) {
                return $this->render('singleView.html.twig', ['article' => $article, 'id' => $id, 'Contenu' => $Contenu]);
            // }
            
        }

    
    

}

?>