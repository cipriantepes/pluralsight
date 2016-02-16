<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:04 AM
 */

function books_by_author_year( $temp_author_name, $temp_year = 1910 ) {
	echo $temp_year;
	echo "\n";
	echo $temp_author_name;
	echo "\n";
}

function get_author() {
	return "Ciprian Tepes";
}

$year = 1920;

$author = get_author();

books_by_author_year( $author, $year );
