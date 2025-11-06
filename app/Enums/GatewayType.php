<?php

namespace App\Enums;

enum GatewayType: string
{
    case GATEWAY1 = 'gateway1';
    case GATEWAY2 = 'gateway2';

    public function getBaseUrl(): string
    {
        return match($this) {
            self::GATEWAY1 => config('gateways.gateway1.url'),
            self::GATEWAY2 => config('gateways.gateway2.url'),
        };
    }

    public function label(): string
    {
        return match($this) {
            self::GATEWAY1 => 'Gateway 1',
            self::GATEWAY2 => 'Gateway 2',
        };
    }
}
