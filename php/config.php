<?php 
    $conn = mysqli_connect("localhost" , "root" , "" , "text");
    if(!$conn) {
        echo "Database not connected" . mysqli_connect_error();
    }
?>