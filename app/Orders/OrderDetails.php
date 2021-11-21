<?php

namespace App\Orders;

use App\Billing\PaymentGateawayContract;

class OrderDetails
{
    private $paymentGateaway;

    public function __construct(PaymentGateawayContract $paymentGateaway)
    {
        $this->paymentGateaway = $paymentGateaway;
    }

    public function all(){
        $this->paymentGateaway->setDiscount(500);

        return [
            'name' => 'victor',
            'address' => 'first street'
        ];
    }
}
