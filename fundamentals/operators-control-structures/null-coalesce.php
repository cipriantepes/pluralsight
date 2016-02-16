<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 2:40 AM
 */


$authors = [ "Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott" ];
//$count   = count( $authors );

$outcome = $count ?? "Count unavailable";

echo $outcome;
