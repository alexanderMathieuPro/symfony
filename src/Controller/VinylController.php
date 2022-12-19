<?php 
namespace App\Controller;

use function Symfony\Component\String\u;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController{
    
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Homepage');
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