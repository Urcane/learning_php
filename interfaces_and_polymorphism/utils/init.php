<?php namespace UtilsInterface;

require_once('./interfaces/Kendaraan.php');

use InterfacesFile\Kendaraan;

class Transportation
{
    public static function init(Kendaraan $vehicle)
    {
        if ($vehicle->statusMesin) {
            echo $vehicle->menyalakanMesin();
            echo '<br>';
        }

        echo $vehicle->meningkatkanKecepatan();
        echo '<br>';
        echo $vehicle->menurunkanKecepatan();
    }
}
