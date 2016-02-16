<?php

/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 1:54 AM
 */
class Author extends Person {
	public static $century_popular = "19th";
	private $pen_name = "Mark Twain";

	// :: - scope resolution operator
	// parent:: for parent class methods / properties
	public static function getCenturyAuthorWasPopular() {
		return self::$century_popular;
	}

	public function getPenName() {
		return $this->pen_name . PHP_EOL;
	}

	public function getCompleteName() {
		echo "Author->getCompleteName()" . PHP_EOL;

//		return $this->first_name . ' ' . $this->last_name . ' a.k.a. ' . $this->pen_name . PHP_EOL;
		return $this->getFullName() . ' a.k.a. ' . $this->pen_name . PHP_EOL;
	}
}


