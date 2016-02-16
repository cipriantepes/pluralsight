<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:03 AM
 */

// required params should be at the beginning

function book_by_author_year( $temp_author_name, $temp_year = 1910 ) {
	echo $temp_year;
	echo "\n";
	echo $temp_author_name;
	echo "\n";
}


$year = 1920;
$author_name = "Ciprian Tepes";
book_by_author_year($author_name);
