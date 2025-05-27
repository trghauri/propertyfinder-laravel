<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Profiles extends HttpClient
{
    public function updatePublicProfile($replacements = [], array $data = [])
    {
        return $this->patch(strtr('/v1/public-profiles/{id}', $replacements), $data);
    }

}