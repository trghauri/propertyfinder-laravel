<?php

namespace PropertyFinderApi;

use Illuminate\Support\Facades\Http;

class HttpClient
{
    protected string $baseUrl;
    protected string $token;

    public function __construct(?string $token = null)
    {
        $this->baseUrl = "https://atlas.propertyfinder.com/";
        $this->token = $token ?? config('propertyfinder.api_token');
    }

    protected function get(string $endpoint, array $query = [])
    {
        return Http::withToken($this->token)->get($this->baseUrl . $endpoint, $query)->json();
    }

    protected function post(string $endpoint, array $data = [])
    {
        return Http::withToken($this->token)->post($this->baseUrl . $endpoint, $data)->json();
    }

    protected function patch(string $endpoint, array $data = [])
    {
        return Http::withToken($this->token)->patch($this->baseUrl . $endpoint, $data)->json();
    }

    protected function put(string $endpoint, array $data = [])
    {
        return Http::withToken($this->token)->put($this->baseUrl . $endpoint, $data)->json();
    }

    protected function delete(string $endpoint)
    {
        return Http::withToken($this->token)->delete($this->baseUrl . $endpoint)->json();
    }
}