<?php
session_start();
date_default_timezone_set('Europe/Sarajevo');

$pizzaId = $_GET['id'];
$dateInserted = date("Y-m-d H:i:s");
$userId = $_SESSION['userId'];

$dbc = mysqli_connect('localhost', 'root', 'root', 'Pizza2go');

$query = mysqli_query($dbc, "INSERT INTO temp (PizzaId, UserId, DateInserted, IsOrdered)
							 VALUES ($pizzaId, $userId, '$dateInserted', false)");

  	header('location: menu.php');
?>