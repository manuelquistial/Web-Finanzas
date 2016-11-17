<?php

function connection(){
    $connection = mysqli_connect("localhost","root","1234","Gestion_Revenue_Societe");
    return $connection;
}

?>