<?php

namespace App\Enum;

enum AddressTypeEnum: string
{
    case SHIPPING = 'shipping';
    case BILLING = 'billing';

    public static function values(): array
    {
        return collect(static::cases())->map(fn ($e) => $e->value)->toArray();
    }
}