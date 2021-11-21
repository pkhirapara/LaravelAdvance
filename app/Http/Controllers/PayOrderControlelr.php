<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateaway;
use App\Billing\PaymentGateawayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderControlelr extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGateawayContract $paymentGateaway)
    {

        $order = $orderDetails->all();
        dd($paymentGateaway->charge(2500));
    }
}
