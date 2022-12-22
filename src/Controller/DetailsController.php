<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DetailsController extends AbstractController
{
    #[Route('/details/{{results.id}}', name: 'app_details')]
    public function details(CallApiService $callApiService): Response
    {
         $detailsDataMovies = $callApiService->callApiMovies()
        
    
    
        

        return $this->render('details/index.html.twig', [
            'detailsDataMovies' => $detailsDataMovies,
            'title' => $detailsDataMovies['title'],
            'overview' => $detailsDataMovies['overview'],
            'poster_path' => $detailsDataMovies['poster_path'],
            'release_date' => $detailsDataMovies['release_date'],
            'vote_average' => $detailsDataMovies['vote_average'],
            'vote_count' => $detailsDataMovies['vote_count'],
            'runtime' => $detailsDataMovies['runtime'],
            'genres' => $detailsDataMovies['genres'],
            'production_companies' => $detailsDataMovies['production_companies'],
        ]);
    }
    
}
