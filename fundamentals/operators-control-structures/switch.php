<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 2:23 AM
 */


$authors = [ "Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott" ];

$count = count( $authors );

switch ( $count ) {
	case 0:
		echo "There are no authors." . PHP_EOL;
		break;
	case 1:
		echo "There is 1 author." . PHP_EOL;
		break;
	default:
		echo "There is a total of $count authors." . PHP_EOL;
		break;
}
