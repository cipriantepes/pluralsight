<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:01 AM
 */

function book_by_author_year( $author_name, $year ) {
	echo $year;
	echo "\n";
	echo $author_name;
}

$year = 1910;
$author_name = 'Ciprian Tepes';

book_by_author_year( $author_name, $year );
