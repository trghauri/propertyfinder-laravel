<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Roles extends HttpClient
{
    public function listRoles(array $data = [])
    {
        return $this->get('/v1/roles', $data);
    }

}