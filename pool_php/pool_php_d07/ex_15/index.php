<?php
include_once ("ex_15.php");
$spaceMarine = new \Imperium\Soldier("Gessart");
$chaosSpaceMarine = new \Chaos\soldier("Ruphen");

echo $spaceMarine."\n";
echo $chaosSpaceMarine."\n";

$spaceMarine->doDamage($chaosSpaceMarine);

echo $spaceMarine."\n";
echo $chaosSpaceMarine."\n";