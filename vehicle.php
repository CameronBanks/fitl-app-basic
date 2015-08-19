<?php 

$type = $_REQUEST['type'];

if ($type == 'truck') {

$vehicle = array(
	'make' => 'Toyota',
	'model' => 'Land Cruiser',
	'year' => '2000',
	);
}

elseif ($type == 'car') {

$vehicle = array(
	'make' => 'Ford',
	'model' => 'Fusion',
	'year' => '2002',
	);
}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><?php echo $vehicle['make']; ?></h1>
<h1><?php echo $vehicle['model']; ?></h1>
<h1> <?php echo $vehicle['year']; ?></h1>
</body>
</html>