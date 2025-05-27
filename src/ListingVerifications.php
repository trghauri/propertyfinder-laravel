<?php

namespace PropertyFinderApi;

use PropertyFinderApi\HttpClient;

class ListingVerifications extends HttpClient
{
    public function checkEligibility(array $data = [])
    {
        return $this->post('/v1/listing-verifications/eligibility-check', $data);
    }

    public function createVerification(array $data = [])
    {
        return $this->post('/v1/listing-verifications', $data);
    }

    public function resubmitVerification($replacements = [], array $data = [])
    {
        return $this->post(strtr('/v1/listing-verifications/{submissionId}/resubmit', $replacements), $data);
    }

}