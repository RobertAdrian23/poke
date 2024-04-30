<?php
// src/Controller/PostController.php

/*namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DbzController extends AbstractController
{
    private HttpClientInterface $httpClient;

   public function __construct(HttpClientInterface $httpClient) {
     $this->httpClient = $httpClient;
    }
    

    #[Route('/posts/load', name: 'post_load')]  // Ruta para acceder a los personajes
    public function load(): Response
    {
        try {
            // Hacer una solicitud GET a la API de Dragon Ball para obtener los personajes
            $response = $this->httpClient->request('GET', 'https://dragonball-api.com/api/characters');
            $characters = $response->toArray();

            // Renderizar los datos obtenidos con una plantilla Twig
            return $this->render('/dragonball/dragonball.html.twig', [
                'characters' => $characters,
            ]);
        } catch (\Exception $e) {
            return new Response("Error al cargar los personajes: " . $e->getMessage());
        }
    }
}*/