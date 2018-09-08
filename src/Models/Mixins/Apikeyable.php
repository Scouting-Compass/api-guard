<?php

namespace Compass\ApiGuard\Models\Mixins;

use Compass\ApiGuard\Models\ApiKey;

/**
 * Trait Apikeyable 
 * 
 * @package Compass\ApiGuard\Models\Mixins
 */
trait Apikeyable
{
    public function apiKeys()
    {
        return $this->morphMany(config('apiguard.models.api_key', ApiKey::class), 'apikeyable');
    }

    public function createApiKey()
    {
        return ApiKey::make($this);
    }
}
