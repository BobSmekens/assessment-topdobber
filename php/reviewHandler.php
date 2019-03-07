<?php

$review = $_POST['review'];

$query = 
"INSERT INTO reviews (review)
VALUES ('$review')";

include "../db_connection.php";

$conn->query($query); 


header('location: ../index.php');



?>