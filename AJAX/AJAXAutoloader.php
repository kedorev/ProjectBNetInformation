<?php
/**
 * Created by PhpStorm.
 * User: kedoFixe
 * Date: 19/11/2016
 * Time: 10:29
 */


function __autoload($class_name) {
    include '../Class/' . $class_name . '.php';
}