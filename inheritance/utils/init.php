<?php
namespace Utils;

include('./subclass/Mobil.php');

use ParentClass\Kendaraan;
use SubClass\Mobil;

$mobil = new Mobil('Lamborghini Gallardo', 4, 360, \false);
echo $mobil->menyalakanMesin();
echo '<br>';
echo $mobil->menghitungKecepatanMaksimal();

echo '<br><br>';

$kendaraan = new Kendaraan('Phoenix', 3, 20, \true);
echo $kendaraan->menyalakanMesin();
