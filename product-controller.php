<?php

$page = $_REQUEST['page'];


// Database Connection Credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create Connection

$connection = new mysqli($servername, $username, $password);

// Check for an Error

if ($connection->connect_error) {
  echo 'Connection Failed: ' . $connection->connect_error;
  exit; 
}

// Otherwise, connected successfully!

//echo 'Connection Successfull';

// Connect to the "fitl" database
$connection->select_db('fitl');

//Determine what page to show
if ($page == 'show') {
	$id = $_REQUEST['id'];
	show($id);
		
}

elseif ($page == 'create') {
	create();
}

// Load the show page
function show($id) {
	global $connection;

	$object = array(
		// set to nill so browser doesn't throw php error - if no request variable is accessed via the url

		  'name' => '',
		  'type' => '',
		  );


		// Query to selct the object
		//SELECT * FROM products Where id = 1
		$sql = 'SELECT * FROM products WHERE id = ' . $id;

		//Execute the query
		$result = $connection->query($sql);

		// Check for and retrieve the object 

		if ($result->num_rows > 0) {
		  $object = $result->fetch_assoc();
		   // echo '<pre>';
		   // print_r($object);
		   // echo '</pre>';

		}

		//Load the view file
		include 'product-show-view.php';
}

//Load the create page
function create() {
	include 'product-create-view.php';
}

?>