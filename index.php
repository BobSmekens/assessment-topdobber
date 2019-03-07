<?php 
session_start(); 
$message1 = "One correct answer, much to learn young padawan!";
$message2 = "Two correct answers, we do not yet grant you the rank of master";
$message3 = "All answers were correct, we accept you as fishing jedi master!";

if (isset($_SESSION['correct'])) {
    $correct = $_SESSION['correct'];
    if($correct == 1) {
        echo '<script type="text/javascript">alert("'.$message1.'");</script>';
    } else if ($correct == 2) {
        echo '<script type="text/javascript">alert("'.$message2.'");</script>';
    } else if($correct == 3) {
        echo '<script type="text/javascript">alert("'.$message3.'");</script>';
    };
    // echo '<script type="text/javascript">alert("You had '.$correct.' correct answers");</script>';
    session_destroy();
    $session_done = true;
} else {
    $session_done = false;
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TopDobber</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
    <!-- <script src="main.js"></script> -->
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
</head>
<body>

<div class="quiz-container">
<?php 
    if ($session_done === false){
        include "php/quiz.php"; 
    } else {
        include "php/results.php";
    }
?>
</div>


</body>
</html>