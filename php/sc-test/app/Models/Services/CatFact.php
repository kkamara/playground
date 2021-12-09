<?php

namespace App\Models\Services;

use GuzzleHttp\Client;

class CatFact {
    private Client $client;

    const TEXT = 'text';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * Definition for querying facts endpoint.
     * Example request: GET /facts/random?animal_type=cat&amount=2
     * @param Int $amount (optional)
     * @return Array
     */
    public function getFacts(int $amount=1) {
        $url = config('app.cat_fact_api')."/facts/random?animal_type=cat&amount=$amount";
        $response = $this->client->request('GET', $url);
        $data = json_decode((string) $response->getBody(), true);
        $result = array();
        if (2 < count($data)) {
            $result[self::TEXT] = $data[self::TEXT];
            $result[self::CREATED_AT] = $data[self::CREATED_AT];
            $result[self::UPDATED_AT] = $data[self::UPDATED_AT];
        } else {
            foreach($data as $d) {
                array_push($result, [
                    self::TEXT => $d[self::TEXT],
                    self::CREATED_AT => $d[self::CREATED_AT],
                    self::UPDATED_AT => $d[self::UPDATED_AT],
                ]);
            }
        }
        return $result;
    }
}
