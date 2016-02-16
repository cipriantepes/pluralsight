<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 1:54 AM
 */

include 'Person.php';
include_once 'Author.php';

$new_author = new Author( "Ciprian", "Tepes", 1998 );
echo $new_author->getCompleteName();
