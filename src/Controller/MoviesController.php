<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CallApiService;


class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('movies/index.html.twig', [
            'data' => $callApiService->callApiMovies(),
        ]
    );
}}




