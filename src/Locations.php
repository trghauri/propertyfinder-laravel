<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Locations extends HttpClient
{
    public function listLocations(array $data = [])
    {
        return $this->get('/v1/locations', $data);
    }

}