<?php

use UtilsMagicMethods\Init;

require_once('./MagicMethods/MagicClass.php');
require_once('./Utils/init.php');

$initPeople = new Init('hitam', 'kotak');
echo $initPeople;
echo $initPeople();

echo $initPeople->getHairColor();
echo Init::exampleStaticMethod();

echo $initPeople->hairColor . "<br>";

/**
 * 2 different ways to edit/access value of property
 * - make a getter and setter of that property
 * - make a property public :D
 */

echo $initPeople->tinggiBadan . "<br>";
$initPeople->tinggiBadan = 20;
echo $initPeople->tinggiBadan . "<br>";

/**
 * Duplicated $initPeople.
 * $unserializedInitPeople Objects should not affects the $initPeople Objects
 */

$serializedInitPeople = serialize($initPeople);
$unserializedInitPeople = unserialize($serializedInitPeople);

echo "<br>" . $unserializedInitPeople->faceShape . "<br>";
var_dump($unserializedInitPeople === $initPeople);
echo "<br>";
echo "<br>";
var_dump($initPeople);
echo "<br>";
var_dump($unserializedInitPeople);
echo "<br>";
$newInitPeople = clone $initPeople;
