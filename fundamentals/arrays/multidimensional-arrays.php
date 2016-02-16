<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:46 AM
 */

$authors = array(
	"Male"   => array(
		"Charles Dickem"      => array( "A Christmas Carol", "Oliver Twist" ),
		"Willaim Shakespeare" => array( "Romeo & Juliet", "Richard III" ),
		"Mark Twain"          => array( "The Adventures of Tom Sawyer", "The Prince and the Pauper" )
	),
	"Female" => array(
		"L. M. Montgomery"  => array( "Anne of Green Gables", "Anne of Avonlea" ),
		"Louisa May Alcott" => array( "Little Women" )
	)
);

print_r( $authors['Male']['Mark Twain'][1] );
