<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger): Response
    {

        $songs = [
            1 => ['name' => ' Godzilla ft. Juice WRLD', 'url' => '/audio/Godzilla ft. Juice WRLD.mp3'],
            2 => ['name' => 'Photograph', 'url' => '/audio/Photograph.mp3'],
            3 => ['name' => 'Beautiful Things', 'url' => '/audio/Beautiful Things.mp3'],
            4 => ['name' => 'Headlight', 'url' => '/audio/Headlight.mp3'],
            5 => ['name' => 'Take A Look Around', 'url' => '/audio/Take A Look Around.mp3'],
            6 => ['name' => 'Formidable', 'url' => '/audio/Formidable.mp3'],

        ];


        return $this->json($songs[$id]);
    }
}
