<?php

namespace App\Billing;

interface PaymentGateawayContract
{
    public function setDiscount($amount);

    public function charge($amount);
}
