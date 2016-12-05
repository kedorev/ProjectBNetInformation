<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 05/12/16
 * Time: 14:58
 */
include "AJAXInclude.php";

if(isset($_POST['local']))
{
    switch ($_POST['local'])
    {
        case 'fr_FR':
            echo "
                    <option value=\"Arak-arahm\">Arak-arahm</option>
                    <option value=\"Arathi\">Arathi</option>
                    <option value=\"Archimonde\">Archimonde</option>
                    <option value=\"Chants éternels\">Chants éternels</option>
                    <option value=\"Hyjal\">Hyjal</option>
            ";
            break;
        case 'de_DE':
            echo "
                    <option value=\"Aegwynn\">Aegwynn</option>
                    <option value=\"Alexstrasza\">Alexstrasza</option>
                    <option value=\"Alleria\">Alleria</option>
            ";
            break;
    }

}