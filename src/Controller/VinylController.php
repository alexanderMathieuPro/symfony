<?php 
namespace App\Controller;

use function Symfony\Component\String\u;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    
    #[Route('/')]
    public function homepage(): Response
    {
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & James',
        ]);
    }

    #[Route('/browse/{genre}')]
    public function browse(string $genre = null): Response
    {
        if($genre){
            $title = 'Genre : '. u(str_replace('-', ' ', $genre))->title(true);
        }
        else{
            $title = 'Tout les genres';
        }

        return new Response($title);
    }
}