<?php
include_once ("AWeapon.php");

class PowerFist extends AWeapon
{
    public function __construct()
    {
        parent::__construct("Power Fist", 50, 8, true);
    }

    public function Attack()
    {
        echo "SBAM\n";
    }
}