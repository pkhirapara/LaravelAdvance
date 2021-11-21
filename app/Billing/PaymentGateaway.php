<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateaway
{

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function charge($amount){
        return [
            'amount' => $amount,
            'confirmation' => Str::random(),
            'currency' => $this->currency,
        ];
     }
}
