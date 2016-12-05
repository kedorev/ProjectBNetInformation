<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 05/12/16
 * Time: 14:17
 */
include "../constant.php";

session_start();
var_dump($_SESSION);

if(isset($_POST['login']))
{
    $_SESSION['USER'] = $_POST['login'];
    $path = "Location: ".URLSite;
    header($path);


}
else
{
    header("Location : ".URLSite."/login.php");
}
exit;