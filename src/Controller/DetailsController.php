<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DetailsController extends AbstractController
{
    #[Route('/details/{id}',  methods: ['GET'], name: 'app_details')]
    public function details(CallApiService $callApiService): Response
    {
        $detailsDataMovies = $callApiService->callApiMovies();
    
        

        return $this->render('details/index.html.twig', [
            'detailsDataMovies' => $detailsDataMovies,
        ]);
    }
    
}
