<?php

namespace App\Services;

use GuzzleHttp\Client;

/**
 * This is the model class for API business".
 *
 */
class BusinessService
{
    /**
     * Guzzle client
     */
    private $_client;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => env('API_URL', 'https://api.bizdirenepal.com/v1'),
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('API_KEY'),
            ],
        ]);
    }

    /**
     * Fetch business details by id
     *
     * @param int $id
     */
    public function findOne(int $id)
    {
        $response = $this->_client->get('businesses/' . $id);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to fetch business.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Get all business details
     */
    public function findAll(array $data)
    {
        $response = $this->_client->get('businesses', ['query' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to fetch businesses.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Create business
     */
    public function create(array $data)
    {
        $response = $this->_client->post('businesses', ['json' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to create business.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Update business
     */
    public function update(int $id, array $data)
    {
        $response = $this->_client->put('businesses/' . $id, ['json' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to update business.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Save business contact
     */
    public function saveContact(array $data)
    {
        $response = $this->_client->post('business-contacts', ['json' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to send message business.');
        }
        return $response->getBody()->getContents();
    }
}
