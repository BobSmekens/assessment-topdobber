<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

header('location: ../index.php');

?>