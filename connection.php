<?php

    $database= new mysqli("localhost","root","","tt");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>