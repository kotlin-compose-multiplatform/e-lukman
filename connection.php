<?php
    $database= new mysqli("216.250.11.90","wordpress","{superSecretPassword!123}","edoc");
    if ($database->connect_error){
        
       die("Connection failed:  ".$database->connect_error);
    }

?>