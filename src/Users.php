<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Users extends HttpClient
{
    public function createUser(array $data = [])
    {
        return $this->post('/v1/users/', $data);
    }

    public function getUsers(array $data = [])
    {
        return $this->get('/v1/users/', $data);
    }

    public function updateUser($replacements = [], array $data = [])
    {
        return $this->patch(strtr('/v1/users/{id}', $replacements), $data);
    }

}