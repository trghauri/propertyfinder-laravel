<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Compliances extends HttpClient
{
    public function getPermitDetails($replacements = [], array $data = [])
    {
        return $this->get(strtr('/v1/compliances/{permitNumber}/{licenseNumber}', $replacements), $data);
    }

}