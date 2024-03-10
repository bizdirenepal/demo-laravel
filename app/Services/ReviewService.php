<?php

namespace App\Services;

use GuzzleHttp\Client;

/**
 * This is the model class for API product".
 *
 */
class ReviewService
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
            'base_uri' => env('API_URL', 'https://api.bizdirenepal.com'),
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('API_KEY'),
            ],
        ]);
    }

    /**
     * Fetch product details by id
     *
     * @param int $id
     */
    public function findOne(int $id)
    {
        $response = $this->_client->get('business-reviews/' . $id);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to fetch product.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Get all product details
     */
    public function findAll(array $data)
    {
        $response = $this->_client->get('business-reviews', ['query' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to fetch reviews.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Create product
     */
    public function create(array $data)
    {
        $response = $this->_client->post('business-reviews', ['json' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to create product.');
        }
        return $response->getBody()->getContents();
    }

    /**
     * Update product
     */
    public function update(int $id, array $data)
    {
        $response = $this->_client->put('business-reviews/' . $id, ['json' => $data]);
        if (!$response->getStatusCode()) {
            throw new \Exception('Unable to update product.');
        }
        return $response->getBody()->getContents();
    }
}
