<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:09 AM
 */

$author_name = "Ciprian Tepes";

function set_author_name() {
	global $author_name;
	$author_name = "Super Nume";
}

set_author_name();

echo $author_name;
