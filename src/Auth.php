<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Auth extends HttpClient
{
    public function issueToken(array $credentials)
    {
        return $this->post('/v1/auth/token', $credentials);
    }
}