<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    /**
     * 
     */
    #[Route("/")]
    public function homepage(): Response
    {
        return $this->render('vinyl/home.html.twig', ['title' => 'PB & Jams']);
    }

    // #[Route("/browse")]
    // public function browse(): Response
    // {
    //     return new Response('Vinlye: Hello Vinyle 1992');
    // }

    #[Route("/browse/{slug}")]
    public function browseSlug(string $slug = null): Response
    {
        if ($slug) {
            $title = "Genre: " . (str_replace("-", ' ', $slug));
        } else {
            $title = "All Genre";
        }
        return new Response($title);
    }
}
