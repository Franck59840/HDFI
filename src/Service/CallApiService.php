<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Request;

class CallApiService 
{

    public function __construct(private HttpClientInterface $client, public string $apiKey)
    {
    }

    public function callApiMovies(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/movie/popular?api_key='.$this->apiKey.'&language=en-EN&page=1');
        
            if ($response->getStatusCode() === 200) {
                return $response->toArray();
            }
    }
    public function callApiDetailsMovies(Request $resquest): array
    {
        $id = $resquest->get('id');
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/movie/' . $id . '?api_key='.$this->apiKey.'&language=en-US');
        
            if ($response->getStatusCode() === 200) {
                return $response->toArray();
            }
    }

    public function callApiSeries(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/tv/popular?api_key='.$this->apiKey.'&language=en-US&page=1');
            
            if ($response->getStatusCode() === 200) {
                return $response->toArray();
            }
    }

    public function callApiDetailsSeries(Request $resquest): array
    {
        $id = $resquest->get('id');
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/tv/' . $id . '?api_key='.$this->apiKey.'&language=en-US');
        
            if ($response->getStatusCode() === 200) {
                return $response->toArray();
            }
            return [];
    }

    public function callApiLatestMovies(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/movie/top_rated?api_key='.$this->apiKey.'&language=en-US&page=1');

            if ($response->getStatusCode() === 200) {
                return $response->toArray();
            }
    }
}

