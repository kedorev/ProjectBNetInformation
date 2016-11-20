<?php
/**
 * Created by PhpStorm.
 * User: kedoFixe
 * Date: 18/11/2016
 * Time: 19:32
 */

include "include.php";

//var_dump($_SESSION);


$character = unserialize($_SESSION["character"]);
var_dump($character);