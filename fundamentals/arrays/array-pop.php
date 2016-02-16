<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:36 AM
 */

$authors = array(
	"Charles Dickens",
	"Jane Austin",
	"William Shakespeare"
);

$last_val = array_pop( $authors );

echo $last_val;

print_r( $authors );
