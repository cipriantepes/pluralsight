<?php

/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:50 AM
 */
// public properties can be accessed outside the class
class Person {
	const AVG_LIFE_SPAN = 79;


	// Define Properties
	private $first_name;
	private $last_name;
	private $year_born;

	public function __construct( $temp_first = "", $temp_last = "", $temp_born = "" ) {
//		echo "I'm in the constructor\n";
//		echo "Constructor" . PHP_EOL;
		$this->first_name = $temp_first;
		$this->last_name  = $temp_last;
		$this->year_born  = $temp_born;
	}


	// Define Methods
	// Getters and Setters
	public function getFirstName() {
		return $this->first_name . PHP_EOL;
	}

	public function setFirstName( $temp_name ) {
		$this->first_name = $temp_name;
	}

	protected function getFullName() {
		echo "Person->getFullName()" . PHP_EOL;

		return $this->first_name . ' ' . $this->last_name;
	}

	//$this refers to the instance
}

// new instance of a class is like a new template
//$my_object = new Person( "Ciprian", "Tepes", 1999 );
//
//$new_author = new Author( "Samuel Langhorne", "Clemens", 1899 );
//
//echo $new_author->getCompleteName();
//echo Author::getCenturyAuthorWasPopular();

//echo $my_object->first_name . "\n";
//
//$my_object->first_name = "Ciprian Tepes";
//
//echo $my_object->first_name . "\n";
//
//echo $my_object::AVG_LIFE_SPAN . "\n";
//
//$my_object->set_first_name( "Super User" );
//echo $my_object->first_name;
