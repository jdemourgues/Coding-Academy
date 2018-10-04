<?php

interface IUnit
{
    public function equip($fighter); // receive a weapon

    public function attack($fighter);

    public function receiveDamage($fighter);

    public function moveCloseTo($fighter);

    public function recoverAP();

    public function getName();


}