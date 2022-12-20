<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService 
{

    public function __construct(private HttpClientInterface $client, public string $apiKey)
    {
    }

    public function callApi(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.themoviedb.org/3/movie/popular?api_key='.$this->apiKey.'&language=en-EN&page=1');

        return $response->toArray();
    }
}

