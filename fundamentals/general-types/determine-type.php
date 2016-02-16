<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/15/2016
 * Time: 11:52 PM
 */

define('CHECK_CONSTANT', 'Yes, I am a constant!');

$int_var = 1234;
$string_var = "I'm a string";
$bool_var = false;
$float_var = 12.34;

echo is_int($float_var);
echo is_string($string_var);
echo is_bool($bool_var);
echo is_float($float_var);

echo defined('CHECK_CONSTANT');
