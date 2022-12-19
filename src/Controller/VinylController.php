<?php 
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController{
    
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Homepage');
    }

    #[Route('/browse/{genre}')]
    public function browse($genre): Response
    {
        return new Response('Genre :'.$genre);
    }
}