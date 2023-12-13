<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{
    public function fetchData()
    {
        $client = new Client();

        try {
            $response = $client->request('GET', 'https://soccer-football-info.p.rapidapi.com/matches/view/basic/', [
                'query' => [
                    'i' => '90a218c1eac4c020',
                    'l' => 'en_US',
                ],
                'headers' => [
                    'X-RapidAPI-Key' => 'ec36fa380fmsh34a2bbbc11750fcp15a19cjsn995b4948dd3c',
                    'X-RapidAPI-Host' => 'soccer-football-info.p.rapidapi.com',
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            // Handle the fetched data as needed

            return response()->json($data);
        } catch (\Exception $e) {
            // Log the exception for further investigation
            \Illuminate\Support\Facades\Log::error($e);

            // Return a generic error response
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
