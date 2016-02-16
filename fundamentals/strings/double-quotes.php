<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:13 AM
 */

// double quote strings are evaluated

$currency = "penny";

$sample_string = "A $currency saved is a $currency earned.\n";

echo $sample_string;

$var = 2;

echo "{$var}nd place\n";
echo $var . "nd place\n";

$misc = "st. Patrick's Day";

echo $misc;
