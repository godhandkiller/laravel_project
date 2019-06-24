<?php

namespace App\Services;

/**
 * summary
 */
class Twitter {
    protected $apiKey;

    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
}
