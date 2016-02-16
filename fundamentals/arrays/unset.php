<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:36 AM
 */


$authors = array( "Charles Dickens", "Jane Austin", "William Shakespeare" );

unset( $authors[1], $authors[0] );

// unset $authors --- remove all

echo sizeof( $authors );

print_r( $authors );
