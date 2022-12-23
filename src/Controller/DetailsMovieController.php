<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class DetailsMovieController extends AbstractController
{
    #[Route('/details/{id}',methods: ['GET'] ,name: 'app_details_movie')]
    public function details(int $id,CallApiService $callApiService, Request $request): Response
    {
        $detailsDataMovies = $callApiService->callApiDetailsMovies($request);
   
         return $this->render('details_movie/index.html.twig', [
            
                'detailsDataMovies' => $detailsDataMovies,
            
    ]);
    }
    
}
