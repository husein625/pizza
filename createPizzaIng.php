<?php

// initializing variables
$nameError = "";
$priceError = "";
$id = 0;
$PizzaId = $_GET['PizzaId'];
$activeValue = "";

$db = mysqli_connect('localhost', 'root', 'root', 'pizza2go');

$getIng = mysqli_query($db, "SELECT * FROM ingrediants");


// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form  $username = mysqli_real_escape_string($db, $_POST['username']);
  $PizzaId = $_POST['PizzaId'];
  $IngrediantId = $_POST['ingName'];

  
    $query = "INSERT INTO pizzaingrediants (PizzaId, IngrediantId, IsActive)
              VALUES($PizzaId ,$IngrediantId ,true)";
    mysqli_query($db, $query);
    
    header('location: PizzaIngIndex.php?id='.$PizzaId.'');

 // }
}


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- For navbar -->

<link rel="stylesheet" href="css/index.css"> <!-- My css file -->

<link href="css/Bebas.Neue.css" rel="stylesheet"> <!-- Font(orange letters) -->

<link rel="stylesheet" href="css/slideshow.w3.css"><!-- Write your comments here -->

<link href="css/Oswald.css" rel="stylesheet"><!-- Write your comments here -->
<title>Pizza table </title>
<link rel="shortcut icon" href="img/pizza_title.png" type="image/png">

</head>
<body>
<div class="container">

     <?php include("header.php"); ?>

  <div id = "main" style="width: 500px;height: 500px;position: absolute;left: 10px;top: 100px;">
    <div id = "items"style="width: 500px;height: 500px;position: absolute;left: 10px;top: 100px;">


 <form action="createPizzaIng.php" method="POST" id="signup-form" class="signup-form">


<h2 class="form-title">Add ingrediant to pizza</h2>
<input type="hidden" class="form-input" name="PizzaId" value="<?php  echo $PizzaId; ?> "/>

<div class="form-group">
<select name="ingName">
  <?php
  while ($row = mysqli_fetch_assoc($getIng)) { 
    echo '<option name="IngrediantId" value="' . $row['IngrediantId'] . '">' . $row['Name'] . '</option>';
    ?>
 
<?php } ?>
 </select>


<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Save" />
</div>
</form>
                                <br/> 
                        
             