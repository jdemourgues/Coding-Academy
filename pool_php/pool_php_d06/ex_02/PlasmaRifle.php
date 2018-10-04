<?php
include_once ("AWeapon.php");

class PlasmaRifle extends AWeapon
{
     public function __construct()
    {
        parent::__construct("Plasma Rifle", 21, 5);
    }

    public function Attack()
    {
        echo "PIOU\n";
    }
}