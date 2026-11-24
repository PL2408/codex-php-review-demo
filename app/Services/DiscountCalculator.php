<?php

declare(strict_types=1);

namespace App\Services;

class DiscountCalculator
{
    public function calculate(float $subtotal, float $discountPercent): float
    {
        if ($discountPercent < 0 || $discountPercent > 100) {
            throw new \InvalidArgumentException('Discount must be between 0 and 100');
        }

        $discount = $subtotal * ($discountPercent / 100);

        return $subtotal - $discount;
    }
}
