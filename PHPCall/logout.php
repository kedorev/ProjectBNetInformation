<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 05/12/16
 * Time: 14:13
 */

include "../constant.php";

session_start();
session_unset();
header("Location: ".URLSite);
exit;