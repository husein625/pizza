<?php
session_start();

$id = $_GET['id'];

$dbc = mysqli_connect('localhost', 'root', 'root', 'Pizza2go');

$query = mysqli_query($dbc, "DELETE FROM temp WHERE TempId = '$id' ");

  	header('location: order.php');
?>