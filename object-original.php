<?php
$id = $_REQUEST['id'];

$object = array (
// set to nill so browser doesn't throw php error - if no request variable is accessed via the url

  'title' => '',
  'chooseCategory' => '',
  'category1' => '',
  'category2' => '',
  'chooseType' => '',
  'productType1' => '',
  'productType2' => '',

  );


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

echo 'Connection Successfull';

// Connect to the "fitl" database
$connection->select_db('fitl');

// Query to selct the object
//SELECT * FROM products Where id = 1
$sql = 'SELECT * FROM products WHERE id = ' . $id;

//Execute the query
$result = $connection->query($sql);

// Check for and retrieve the object 

if ($result->num_rows > 0) {
  $object = $result->fetch_assoc();
    echo '<pre>';
    print_r($object);
    echo '</pre>';

}


// set the object variables 
// based on the id value from the url
if ($id == 1) {
// if id is 1
    $object = array(
        'title' => 'Natural Household Cleaners',
        'chooseCategory' => 'Choose your Product Category',
        'category1' => 'Kitchen',
        'category2' => 'Bathroom',
        'chooseType' => 'Choose your Product Type',
        'productType1' => 'General Purpuse Cleaner',
        'productType2' => 'Toliet Bowl Cleaner',
      );
}

elseif ($id == 2) {
  // if id is 2

  $object = array(
   
    'title' => 'Natural Personal Hygiene Products',
    'chooseCategory' => 'Choose your Product Category',
    'category1' => 'Hair',
    'category2' => 'Mouth',
    'chooseType' => 'Choose your Product Type',
    'productType1' => 'Hairspray',
    'productType2' => 'Toothpaste',
    );
 
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title> <?php echo $object['title']; ?> </title>
  </head>
  <body>
    <h1> <?php echo $object['chooseCategory']; ?> </h1>
    <ul>
      <li><?php echo $object ['category1']; ?></li>
      <li> <?php echo $object ['category2']; ?></li>
    </ul>
    <h1> <?php echo $object ['chooseType']; ?></h1>
    <ul>
      <li> <?php echo $object ['productType1']; ?></li>
      <li> <?php echo $object ['productType2']; ?></li>
    </ul>
    <pre>
      alert(This is a message)
    </pre>
  </body>
</html>