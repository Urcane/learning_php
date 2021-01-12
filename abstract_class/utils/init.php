<?php

namespace Utils;

use SubClassAbstract\Mobil;

$newMobil = new Mobil('Lamborgini', 360, \false, 4, 20, 30);
echo $newMobil->menyalakanMesin();
echo '<br>';
echo $newMobil->meningkatkanKecepatan(0, 10);
echo '<br>';
echo $newMobil->menurunkanKecepatan(200, 5);
