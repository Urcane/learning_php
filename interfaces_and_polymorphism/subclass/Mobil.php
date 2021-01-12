<?php 

namespace SubClassInterface;

use InterfacesFile\Kendaraan;

class Mobil implements Kendaraan
{   
    public $statusMesin = \true;

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
