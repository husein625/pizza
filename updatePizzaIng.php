<?php

// initializing variables
$nameError = "";
$priceError = "";
$id = 0;
$PizzaId = 0;
$id = $_GET['id'];
$PizzaId = $_GET['pi'];
$activeValue = "";

$db = mysqli_connect('localhost', 'root', 'root', 'pizza2go');

$getPizza = mysqli_query($db, "SELECT * FROM pizzaingrediants where  PizzaIngrediantsId = '$id' ");
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
  $PizzaIngrediantsId = $_POST['PizzaIngrediantsId'];
  $PizzaId = $_POST['PizzaId'];
  $isActive = $_POST['isActive'];

  if ($isActive == true) {
    $isActive = 1;
  }
  else {
    $isActive = 0;
  }



    $query = "UPDATE pizzaingrediants
              SET  IsActive = $isActive
              WHERE  PizzaIngrediantsId = '$PizzaIngrediantsId' ";
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


<form action="updatePizzaIng.php" method="POST" id="signup-form" class="signup-form">
      

<h2 class="form-title">Update ingrediant for pizza</h2>
<input type="hidden" class="form-input" name="PizzaId" value="<?php  echo $row['PizzaId']; ?>" />
<input type="hidden" class="form-input" name="PizzaIngrediantsId" value="<?php  echo $row['PizzaIngrediantsId']; ?>" />


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
                        
             