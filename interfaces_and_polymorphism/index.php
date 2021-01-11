<?php
require_once('./utils/init.php');
require_once('./subclass/Mobil.php');
require_once('./subclass/Motor.php');
require_once('./subclass/Sepeda.php');

use UtilsInterface\Transportation;
use SubClassInterface\Mobil;
use SubClassInterface\Motor;
use SubClassInterface\Sepeda;

$vehicle = new Sepeda();

Transportation::init($vehicle);
