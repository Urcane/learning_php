<?php

namespace Utils;

use Components\Mobil;

$objMobil = new Mobil(\false, 24);

echo $objMobil -> menyalakanMesin();
echo '<br>';
echo $objMobil -> gas();
