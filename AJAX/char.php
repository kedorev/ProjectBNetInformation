<?php
/**
 * Created by PhpStorm.
 * User: kedoFixe
 * Date: 18/11/2016
 * Time: 19:40
 */

include "AJAXInclude.php";


if(isset($_POST))
{
    if(isset($_POST['Method']) && $_POST['Method'] == "Global")
    {
        //unset($_SESSION["character"]);

        echo "test";
        $personnage = new Perso();

        $data = $_POST['dataBNet'];
        //var_dump($data["name"]);
        $personnage->setName($data["name"]);
        $personnage->setRealm($data["realm"]);
        $personnage->setBattlegroup($data["battlegroup"]);
        $personnage->setLevel($data["level"]);
        $personnage->setAchievementPoints($data["achievementPoints"]);
        $personnage->setTotalHonorableKills($data["totalHonorableKills"]);
        $_SESSION["character"] =  serialize($personnage);
    }
}

