<?php

// initializing variables
$nameError = "";
$priceError = "";
$id = 0;
$id = $_GET['id'];
$activeValue = "";

$db = mysqli_connect('localhost', 'root', 'root', 'pizza2go');

$getPizza = mysqli_query($db, "SELECT * FROM pizzas where PizzaId = '$id' ");
$row = mysqli_fetch_assoc($getPizza);

if($row['IsActive'] == 1){
  $activeValue = "true";
}
else {
  $activeValue = "false";
}

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = $_POST['name'];
  $PizzaId = $_POST['PizzaId'];
  $price = $_POST['price'];
  $isActive = $_POST['isActive'];

  if ($isActive == true) {
    $isActive = 1;
  }
  else {
    $isActive = 0;
  }



    $query = "UPDATE pizzas
              SET Name = '$name', Price = $price, IsActive = $isActive
              WHERE PizzaId = '$PizzaId' ";
    mysqli_query($db, $query);
    
    header('location: PizzaIndex.php');
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


<form action="updatePizza.php" method="POST" id="signup-form" class="signup-form">
      

<h2 class="form-title">Update pizza</h2>
<input type="hidden" class="form-input" name="PizzaId" value="<?php  echo $row['PizzaId']; ?>" />

<div class="form-group">
<input type="text" class="form-input" name="name" id="name" placeholder="Pizza name" style="margin-bottom: 25px;"
value="<?php  echo $row['Name']; ?>" >

<span class="error1" style="color: red;font-size: 15px;position: absolute;left: 440px;top: 140px;"><?php echo $nameError;?></span>

<input type="text" class="form-input" name="price" id="name" placeholder="Price" style="margin-bottom: 25px" 
value="<?php  echo $row['Price']; ?>" >
<span class="error1" style="color: red;font-size: 15px;position: absolute;left: 440px;top: 140px;"><?php echo $priceError;?></span>
<?php if($activeValue == "true"){ ?>
<input type="checkbox" class="form-input" name="isActive" id="isActive" style="margin-bottom: 25px" checked>
<?php } 
else { ?>
<input type="checkbox" class="form-input" name="isActive" id="isActive" style="margin-bottom: 25px">

<?php } ?>


<div class="form-group">
<input type="submit" name="submit" id="submit" class="form-submit" value="Save" />
</div>
</form>
                                <br/> 
                        
             