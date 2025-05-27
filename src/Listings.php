<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Listings extends HttpClient
{
    public function createListing(array $data = [])
    {
        return $this->post('/v1/listings', $data);
    }

    public function updateListing($replacements = [], array $data = [])
    {
        return $this->put(strtr('/v1/listings/{id}', $replacements), $data);
    }

    public function deleteListing($replacements = [], array $data = [])
    {
        return $this->delete(strtr('/v1/listings/{id}', $replacements), $data);
    }

    public function publishListing($replacements = [], array $data = [])
    {
        return $this->post(strtr('/v1/listings/{id}/publish', $replacements), $data);
    }

    public function getListings(array $data = [])
    {
        return $this->get('/v1/listings', $data);
    }

}