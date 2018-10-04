<?php
require_once("character.class.php");

foreach ([new character, new Character("Julien"), new Character] as $character)
{
    echo $character;
}
