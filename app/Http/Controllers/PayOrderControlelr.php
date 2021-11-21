<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateaway;
use Illuminate\Http\Request;

class PayOrderControlelr extends Controller
{
    public function store(PaymentGateaway $paymentGateaway){

        dd($paymentGateaway->charge(2500));
    }
}
