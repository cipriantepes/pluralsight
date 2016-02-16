<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:34 AM
 */

// array_push will only add indexed values
// to use associative array you have to use square brackets

$authors = array( "Charles Dickens", "Jane Austin", "William Shakespeare" );

array_push( $authors, "Ciprian Tepes" );

print_r( $authors );

$authors[] = "Super User";

print_r( $authors );
