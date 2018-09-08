<?php

namespace Compass\ApiGuard\Events;

use Compass\ApiGuard\Models\ApiKey;
use Illuminate\Queue\SerializesModels;

/**
 * Class ApiKeyAuthenticated 
 * 
 * @package Compass\ApiGuard\Events
 */
class ApiKeyAuthenticated
{
    use SerializesModels;

    public $request;

    public $apiKey;

    /**
     * Create a new event instance.
     *
     * @param $request
     * @param ApiKey $apiKey
     */
    public function __construct($request, ApiKey $apiKey)
    {
        $this->request = $request;
        $this->apiKey = $apiKey;
    }
}
