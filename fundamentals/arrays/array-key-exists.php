<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:30 AM
 */

$authors = array( "Charles Dickens", "Jane Austin", "William Shakespeare" );

$authors_assoc = array(
	"quarky"   => "Charles Dickens",
	"brillian" => "Jane Austin",
	"poetic"   => "William Shakespeare"
);

echo $authors_assoc['quarky'];
echo array_key_exists(5, $authors);
echo array_key_exists(2, $authors);
echo array_key_exists('poetic', $authors);
echo array_key_exists('poetic', $authors_assoc);
