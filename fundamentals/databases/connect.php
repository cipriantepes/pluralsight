<?php
/**
 * Created by PhpStorm.
 * User: cippo
 * Date: 2/16/2016
 * Time: 12:06 PM
 */

$db_pass = 'scooter';
$db_user = 'root';
$db_name = 'ps';
$db_host = '192.168.99.100';

//$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$conn = new mysqli( $db_host, $db_user, $db_pass, $db_name, 32772 );

print_r( $conn );

if ( $conn->connect_errno ) {
	exit( "Database Connection Failed. Reason: {$conn->connect_error}" );
}

//$query = "DELETE FROM authors WHERE id = 4";

//$query = "UPDATE authors SET pen_name = 'L. M. Montgomery' WHERE id = 2";

//$query = "INSERT INTO authors(first_name, last_name, pen_name) VALUES('John Ronald Reuel', 'Tolkien', 'J. R. R. Tolkien')";

//$conn->query($query);

//$query = "SELECT first_name, last_name, pen_name FROM authors ORDER BY first_name";


// PREPARED Statement to prevent sql injects
$tempFirstName = 'Lucy Maud';
$query         = "SELECT first_name, last_name, pen_name FROM authors WHERE first_name = ?";
$statementObj  = $conn->prepare( $query );

$statementObj->bind_param( 's', $tempFirstName );
$statementObj->execute();

$statementObj->bind_result( $firstName, $lastName, $penName );
$statementObj->store_result();

if ( $statementObj->num_rows > 0 ) {
	while ( $statementObj->fetch() ) {
		echo $firstName . ' ' . $lastName . ' (' . $penName . ')' . PHP_EOL;
	}
}

$statementObj->close();

/*$result = $conn->query( $query );

if ( $result->num_rows > 0 ) {
	while ( $singleRowFromQuery = $result->fetch_assoc() ) {
//		print_r( $singleRowFromQuery );
		echo "Author: {$singleRowFromQuery['first_name']}" . PHP_EOL;
	}
}
*/
//echo "Newly Created Author ID: {$conn->insert_id}";

$conn->close();
