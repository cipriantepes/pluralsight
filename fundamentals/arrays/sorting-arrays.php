<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:38 AM
 */

// asort preserves the keys for assoc arr
// ksort will sort by key

$authors = array(
	"Charles Dickens",
	"Jane Austin",
	"William Shakespeare",
	"Mark Twain",
	"Louisa May Alcott"
);

$authors_assoc = array(
	"poetic"   => "William Shakespeare",
	"brillian" => "Jane Austin",
	"quarky"   => "Charles Dickens"
);

sort( $authors );

asort( $authors_assoc );

print_r( $authors );

ksort( $authors_assoc );

print_r( $authors_assoc );
