<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 2:07 AM
 */

$var1 = ( 6 < 7 );
$var2 = ( 8 == 8 );
var_dump( $var1, $var2 );

var_dump( $var1 && $var2 ); // return true when both true
var_dump( $var1 || $var2 ); // return true when any is true
