<?php 

namespace TraitsClass;

/**
 * Method For VISA Payment
 */
trait PaymentMethod
{
    public function payNow(): string
    {
        return 'Membayar Sekarang...';
    }
}
