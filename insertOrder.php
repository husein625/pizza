<?php
session_start();
date_default_timezone_set('Europe/Sarajevo');
// initializing vari$message = "Succesfully ordered!"ables
$message = "";
$dateOrdered = date("Y-m-d H:i:s");


$db = mysqli_connect('localhost', 'root', 'root', 'pizza2go');

$query=mysqli_query($db, "SELECT pizzas.Name as Name, pizzas.PizzaId as PizzaId, pizzas.Price as Price, temp.TempId as TempId
                                    FROM temp
                                    left outer join pizzas on temp.PizzaId = pizzas.PizzaId
                                    where temp.UserId = " . $_SESSION['userId'] . " and temp.IsOrdered = 0  ");

while ($row = mysqli_fetch_assoc($query)) {

//mysqli_query($db, "INSERT INTO orders (PizzaId, UserId, DateOrdered) 
                //    values (" . $row['PizzaId'] . ", " . $_SESSION['userId'] . ", '$dateOrdered' )");

mysqli_query($db,"UPDATE temp set IsOrdered = 1 where TempId = " . $row['TempId'] . " ");
}

  
    $_SESSION['message'] = "Succesfully ordered!";
    header('location: order.php');
  
 
?>