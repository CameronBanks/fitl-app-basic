<?php
$title = 'Natural Cleaning Supplies';
$chooseCategory = 'Choose your Product Category';
$category1 = 'Household';
$category2 = 'Personal Hygiene';
$chooseType = 'Choose your Product Type';
$productType1 = 'Toothpaste';
$productType2 = 'Deodorant';
?>

<!DOCTYPE html>
<html>
  <head>
    <title> <?php echo $title; ?> </title>
  </head>
  <body>
    <h1> <?php echo $chooseCategory; ?> </h1>
    <ul>
      <li><?php echo $category1; ?></li>
      <li> <?php echo $category2; ?></li>
    </ul>
    <h1> <?php echo $chooseType; ?></h1>
    <ul>
      <li> <?php echo $productType1; ?></li>
      <li> <?php echo $productType2; ?></li>
    </ul>
    <pre>
    	alert(This is a message)
    </pre>
  </body>
</html>