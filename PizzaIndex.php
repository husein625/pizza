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
    <a href="createPizza.php" style="position: absolute;left:20px;top:50px;">
  <button class="btn btn-outline-success biggerButton" type="button">Create</button>
</a>
		<div id="items"style="width: 500px;height: 500px;position: absolute;left:20px;top:100px;">

      <table id="ingrediants" style="position: absolute;top:0px;" >
                    <tr>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Active</th>
                      <th></th>
                      <th></th>
                    </tr>
                  
				<?php
				 $dbc = mysqli_connect('localhost', 'root', 'root', 'Pizza2go');
				 $query=mysqli_query($dbc, "SELECT * FROM pizzas ");
                while ($row = mysqli_fetch_assoc($query)) { ?>
                
                <tbody>
                
                 <?php

                    echo "<tr>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Price'] . "</td>";
                    echo "<td>" . $row['IsActive'] . "</td>";
                    echo "<td><a href='updatePizza.php?id=".$row['PizzaId']."' id='del'>Edit</a></td>";
                    echo "<td><a href='PizzaIngIndex.php?id=".$row['PizzaId']."' id='del'>Ingrediants</a></td>";
                    echo "</tr>";


                  
                              ?>
                </tbody>
                <?php
                }
                 ?>
                                 </table>

                                <br/> 
                        
             