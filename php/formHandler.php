<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/styles.css">
</head>
<body>


<?php

$answer1 = $_POST['answer0'];
$answer2 = $_POST['answer1'];
$answer3 = $_POST['answer2'];

$correct_answers = 0;
if ($answer1 === 'goed'){
    $correct_answers ++;
}

if ($answer2 === 'goed'){
    $correct_answers ++;
}

if ($answer2 === 'goed'){
    $correct_answers ++;
}

$_SESSION['correct'] = $correct_answers;
?>

<div class="register-container">
    <h3>Register for a chance to win!</h3>
    <form action="registerHandler.php" method="POST">
        <div><span class="label">E-mail:</span><input name="email" required type="email" placeholder="e-mail"></div><br>
        <!-- <div><span class="label">Password:</span><input name="password" required type="password" placeholder="password"></div><br> -->
        <div><span class="label">Adress:</span><input name="adress" required type="text" placeholder="adress"></div><br>
        <div class="btn-container"><button id="register-btn" type="submit">Register</button></div>
    </form>
</div>


</body>
</html>