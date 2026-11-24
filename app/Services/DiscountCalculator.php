<?php

declare(strict_types=1);

namespace App\Services;

class DiscountCalculator
{
    public function calculate(float $subtotal, float $discountPercent): float
    {
        if ($discountPercent < 0) {
            throw new \InvalidArgumentException('Discount cannot be negative');
        }

        $discount = $subtotal * $discountPercent;

        return $subtotal - $discount;
    }
}