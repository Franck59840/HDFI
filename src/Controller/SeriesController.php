<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CallApiService;

class SeriesController extends AbstractController
{
    #[Route('/series', name: 'app_series')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('series/index.html.twig', [
            'data' => $callApiService->callApiSeries(),
        ]);
    }
}

