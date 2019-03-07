<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TopDobber</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css">
    <!-- <script src="main.js"></script> -->
</head>
<body>

<h1>Top Dobber</h1>

<p>Zit niet te tobben, win een een dobber!</p>

<form action="php/formHandler.php" method="POST">
<?php

    include 'db_connection.php';
    $query = 
    "SELECT vragen_vraag, vragen_goed, vragen_fout1, vragen_fout2, vragen_fout3 
    FROM vragen1";

    $db_result = $conn->query($query); 
    
    $count = 0;
    foreach ($db_result as $row)
        {   
        $goed = '<div class="answer goed"><input type="radio" name="answer'. $count .'" value="goed">' . $row['vragen_goed'] . '</div>';
        $fout1 = '<div class="answer"><input type="radio" name="answer'. $count .'" value="fout">' . $row['vragen_fout1'] . '</div>';
        $fout2 = '<div class="answer"><input type="radio" name="answer'. $count .'" value="fout">' . $row['vragen_fout2'] . '</div>';
        $fout3 = '<div class="answer"><input type="radio" name="answer'. $count .'" value="fout">' . $row['vragen_fout3'] . '</div>';
        $array = [$goed, $fout1, $fout2, $fout3];
        shuffle($array);
        
        echo '  
            <div class="question-container">
                <div class="question">'. $row['vragen_vraag'] . '</div>'
                . $array[0] 
                . $array[1]
                . $array[2]
                . $array[3] .          
            '</div>';
        $count ++;
        }
    $conn = null;
?> 
<button type="submit">Submit</button>
</form>

    
</body>
</html>