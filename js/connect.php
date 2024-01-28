<?php
    $con = mysqli_connect("localhost","root","","train_ticket_system");

    //Check connection
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>