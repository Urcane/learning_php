<?php

use SubclassTraits\Visa;

require_once('./interfaces/Payment.php');
require_once('./traitsClass/PaymentMethod.php');
require_once('./traitsClass/PaymentMethod2.php');
require_once('./subclass/Visa.php');

$payment = new Visa;

echo $payment->payNow2();