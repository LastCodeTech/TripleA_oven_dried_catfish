<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ApiSchool
{

    public function apiSend($endpoint)
    {
        try {
            $response = Http::timeout(30)->get($endpoint);
            $responses = $response->json();
            return $responses;
            // return $responses['products'][0]['title'];
        } catch (\Throwable $e) {
            Log::info("The error is: " . $e->getMessage());

            return "Please check your network and try again";
        }
    } 
}
