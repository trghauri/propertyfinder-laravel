<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class Webhooks extends HttpClient
{
    public function listWebhooks(array $data = [])
    {
        return $this->get('/v1/webhooks', $data);
    }

    public function subscribeWebhook(array $data = [])
    {
        return $this->post('/v1/webhooks', $data);
    }

    public function deleteWebhook($replacements = [], array $data = [])
    {
        return $this->delete(strtr('/v1/webhooks/{eventId}', $replacements), $data);
    }

}