<?php
echo "Hello";
    $database= new mysqli("216.250.11.90","wordpress","{superSecretPassword!123}","edoc");
    echo "World";
    if ($database->connect_error){
        echo "error";
       die("Connection failed:  ".$database->connect_error);
    }
    echo "Connected successfully";

?>