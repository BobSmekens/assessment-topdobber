<?php
session_start();
$email = $_POST['email'];
// $password = $_POST['password'];
$password = 1;
$adress = $_POST['adress'];
$correct = $_SESSION['correct'];
$query = 
"INSERT INTO clients (client_email, client_password, client_adress, client_correct)
VALUES ('$email', '$password', '$adress', '$correct')";

include "../db_connection.php";

$conn->query($query); 
$_SESSION['registered'] = true;

header('location: ../index.php');

?>