<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DetailsSerieController extends AbstractController
{
    #[Route('/details/{id}', name: 'app_details_serie')]
    public function details(int $id,CallApiService $callApiService, Request $request): Response
    {
        $detailsDataSeries = $callApiService->callApiDetailsSeries($request);
        
        dd($detailsDataSeries);
         return $this->render('details_serie/index.html.twig', [
            
                'detailsDataSeries' => $detailsDataSeries,
            
    ]);
    }
}
