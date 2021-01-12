<?php 

namespace SubClassInterface;

use InterfacesFile\Kendaraan;

class Sepeda implements Kendaraan
{   
    public $statusMesin = \false;

    public function meningkatkanKecepatan(): string
    {
        return 'Kecepatan Meningkat';
    }

    public function menurunkanKecepatan(): string
    {
        return 'Kecepatan Menurun';
    }

    public function menyalakanMesin(): string{
        return 'Mesin Telah Di nyalakan!!';
    }
}
