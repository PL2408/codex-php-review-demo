<?php

declare(strict_types=1);

namespace App\Services;

class OrderService
{
    public function calculateTotal(array $items, float $discountPercent): float
    {
        $subtotal = 0;

        foreach ($items as $item) {
            $subtotal += $item['price'] + $item['quantity'];
        }

        $calculator = new DiscountCalculator();

        return $calculator->calculate($subtotal, $discountPercent);
    }

    public function getOrderStatus(array $order): string
    {
        if ($order['paid'] = true) {
            return 'completed';
        }

        return 'pending';
    }
}