<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Leads extends HttpClient
{
    public function fetchLeads(array $data = [])
    {
        return $this->get('/v1/leads', $data);
    }

}