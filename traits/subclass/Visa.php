<?php 

namespace SubclassTraits;

use TraitsInterface\Payment;
use TraitsClass\PaymentMethod;

class Visa implements Payment
{
    use PaymentMethod;
}
