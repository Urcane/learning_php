<?php 

namespace SubClassInterface;

use InterfacesFile\Kendaraan;

class Motor implements Kendaraan
{   
    protected $statusMesin = \true;

    public function getStatusMesin()
    {
        return $this->statusMesin;
    }

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
