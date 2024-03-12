<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController  extends AbstractController
{
    #[Route("/", name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => ' Godzilla ft. Juice WRLD', 'artist' => 'Eminem'],
            ['song' => 'Photograph', 'artist' => 'Ed Sheeran'],
            ['song' => 'Beautiful Things', 'artist' => 'Benson Boone'],
            ['song' => 'Headlight', 'artist' => 'Alok & Alan Walkerd'],
            ['song' => 'Take A Look Around', 'artist' => 'Limp Bizkit'],
            ['song' => 'Formidable', 'artist' => 'Stromae'],
        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }
    #[Route('/browse/{slug}', name: 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}
