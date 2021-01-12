<?php 

namespace UtilsInterface;

use InterfacesFile\Kendaraan;

class Transportation
{
    public static function init(Kendaraan $vehicle)
    {
        if ($vehicle->getStatusMesin()) {
            echo $vehicle->menyalakanMesin();
            echo '<br>';
        }

        echo $vehicle->meningkatkanKecepatan();
        echo '<br>';
        echo $vehicle->menurunkanKecepatan();
    }
}
