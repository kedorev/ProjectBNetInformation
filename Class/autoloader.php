<?php
/**
 * Created by PhpStorm.
 * User: apprenant
 * Date: 18/11/16
 * Time: 12:09
 */

function __autoload($class_name) {
    include $class_name . '.php';
}