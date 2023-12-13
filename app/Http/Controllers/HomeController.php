<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{



public function getData()
    {
        $client = new Client();

        $response = $client->get('https://api-football-v1.p.rapidapi.com/v3/fixtures', [
            'headers' => [
                'X-RapidAPI-Key' => 'ec36fa380fmsh34a2bbbc11750fcp15a19cjsn995b4948dd3c',
                'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
            ],
            'query' => [
                'date' => '2021-01-29',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Handle the fetched data as needed

      return response()->json($data);;
    }
}
