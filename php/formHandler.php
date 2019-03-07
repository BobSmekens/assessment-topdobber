<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script> -->
</head>
<body>
<p>Register for a chance to win!</p>

<?php
session_start();
$answer1 = $_POST['answer0'];
$answer2 = $_POST['answer1'];
$answer3 = $_POST['answer2'];


?>
<form action="registerHandler.php" method="POST">
    <div><span class="label">E-mail</span><input name="email" required type="text" placeholder="e-mail"></div><br>
    <div><span id="password" class="label">Password</span><input name="password" required type="password" placeholder="password"></div><br>
    <!-- <div><span id="confirm" class="label">Confirm password</span><input name="confirm" required type="password" placeholder="confirm"></div> -->
    
    <button id="register-btn" type="submit">Register</button>
</form>

</body>
</html>