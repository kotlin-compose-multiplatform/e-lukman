<?php
    $database= new mysqli("127.0.0.1","wordpress","{superSecretPassword!123}","edoc");
    if ($database->connect_error){
        
       die("Connection failed:  ".$database->connect_error);
    }

?>