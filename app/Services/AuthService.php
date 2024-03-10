<?php

namespace App\Services;

use GuzzleHttp\Client;

/**
 * This is the model class for API auth".
 *
 */
class AuthService
{
    /**
     * Guzzle client
     */
    private $_client;

    /**
     * Create a auth service instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => env('API_URL', 'https://api.bizdirenepal.com'),
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('API_KEY'),
            ],
        ]);
    }

    /**
     * Login client
     */
    public function login(array $data)
    {
        $response = $this->_client->post('auth', ['json' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to login client.');
        }
        return $response->getBody()->getContents();
    }
}
