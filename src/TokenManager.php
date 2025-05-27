<?php

namespace PropertyFinderApi;

use Illuminate\Support\Facades\Cache;
use PropertyFinderApi\Auth;

class TokenManager
{
    public static function getToken($companyId, $apiKey, $apiSecret)
    {
        $cacheKey = "propertyfinder_token_{$companyId}";

        return Cache::remember($cacheKey, 1700, function () use ($apiKey, $apiSecret) {
            $auth = new Auth();
            $res = $auth->issueToken([
                'apiKey' => $apiKey,
                'apiSecret' => $apiSecret,
            ]);

            return $res['access_token'] ?? null;
        });
    }
}