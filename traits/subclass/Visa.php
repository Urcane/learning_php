<?php 

namespace SubclassTraits;

use TraitsInterface\Payment;
use TraitsClass\PaymentMethod;
use TraitsClass\PaymentMethod2;

class Visa implements Payment
{
    use PaymentMethod, PaymentMethod2{
        PaymentMethod::payNow insteadof PaymentMethod2;
        PaymentMethod2::payNow as payNow2;
    }
}
