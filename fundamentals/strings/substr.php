<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:23 AM
 */

$quote = "Only those who will risk going too far can possibly find out how far one can go.";

echo substr($quote, strpos($quote, "risk"), strlen($quote)-50);
