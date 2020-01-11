<?php

// initializing variables
$nameError = "";

$db = mysqli_connect('localhost', 'root', 'root', 'pizza2go');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = $_POST['name'];
  

  if (empty($_POST["name"])) {
    $nameError = "Name is required!";
  } 
  
  // Finally, register user if there are no errors in the form
  if (empty($nameError)) {

  	$query = "INSERT INTO ingrediants (Name, isActive) 
  			  VALUES('$name', true)";
  	mysqli_query($db, $query);
  	
  	header('location: ingrediantsIndex.php');
  }
  else {
 
  }
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
<title>Ingrediants table </title>
<link rel="shortcut icon" href="img/pizza_title.png" type="image/png">

</head>
<body>
<div class="container">

<?php include("header.php"); ?>


  <div id="main" style="width: 500px;height: 500px;position: absolute;left: 100px;top: 100px;">
    <div id="items"style="width: 500px;height: 500px;position: absolute;left:20px;top:100px;">
<form action="createIng.php" method="POST" id="signup-form" class="signup-form">
      

<h2 class="form-title">Add new ingreadiant</h2>


<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Your Name" style="margin-bottom: 25px" >
<span class="error1" style="color: red;font-size: 13px;position: absolute;left: 430px;top: 75px;"><?php echo $nameError;?></span>

<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Save" />
</div>
</form>
                                <br/> 
                        
             