<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:43 AM
 */

$authors = array(
	"quarky"   => "Charles Dickens",
	"brillian" => "Jane Austin",
	"poetic"   => "William Shakespeare"
);

foreach ( $authors as $key => $val ) {
//	echo $val . "\n";
	echo $val . " (" . $key . ") \n";
}

