<?php
 $id = $_GET['id'];
 $pi = 0;
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> <!-- For navbar -->

<link rel="stylesheet" href="css/index.css"> <!-- My css file -->

<link href="css/Bebas.Neue.css" rel="stylesheet"> <!-- Font(orange letters) -->

<link rel="stylesheet" href="css/slideshow.w3.css"><!-- Write your comments here -->

<link href="css/Oswald.css" rel="stylesheet"><!-- Write your comments here -->
<title>Pizzas </title>
<link rel="shortcut icon" href="img/pizza_title.png" type="image/png">

</head>
<body>
<div class="container">
<?php include("header.php"); ?>




	<div id="main" style="width: 500px;height: 500px;position: absolute;left: 100px;top: 100px;">
    <?php
   echo " <button class='btn btn-outline-success biggerButton' type='button' style='position: absolute;left:20px;top:50px;'><a href='createPizzaIng.php?PizzaId=".$id."' >Create</a></button>"
    ?>
 
</a>
		<div id="items"style="width: 500px;height: 500px;position: absolute;left:20px;top:100px;">

      <table id="ingrediants" style="position: absolute;top:0px;" >
                    <tr>
                      <th>Name</th>
                      <th>Ingrediant</th>
                      <th>Active</th>
                      <th></th>
                    </tr>
                  
				<?php
				 $dbc = mysqli_connect('localhost', 'root', 'root', 'Pizza2go');
				 $query=mysqli_query($dbc, "SELECT pizzaingrediants.PizzaIngrediantsId, pizzaingrediants.PizzaId, pizzaingrediants.IngrediantId, ingrediants.Name AS IngName, pizzas.Name AS PizzaName, pizzaingrediants.IsActive
          FROM pizzaingrediants 
          left OUTER join ingrediants on ingrediants.IngrediantId = pizzaingrediants.IngrediantId
          left OUTER join pizzas on pizzas.PizzaId = pizzaingrediants.PizzaId  
          WHERE pizzaingrediants.PizzaId = $id");
                while ($row = mysqli_fetch_assoc($query)) { ?>
                
                <tbody>
                
                 <?php

                    echo "<tr>";
                    echo "<td>" . $row['PizzaName'] . "</td>";
                    echo "<td>" . $row['IngName'] . "</td>";
                    echo "<td>" . $row['IsActive'] . "</td>";
                    echo "<td><a href='updatePizzaIng.php?id=".$row['PizzaIngrediantsId']."&pi=".$row['PizzaId']."' id='del'>Edit</a></td>";

                    echo "</tr>";


                  
                              ?>
                </tbody>
                <?php
                }
                 ?>
                                 </table>

                                <br/> 
                        
             