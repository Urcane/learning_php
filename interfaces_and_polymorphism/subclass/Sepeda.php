<?php 

namespace SubClassInterface;

use InterfacesFile\Kendaraan;

class Sepeda implements Kendaraan
{   
    protected $statusMesin = \false;

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
}
