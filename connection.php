<?php

try {
    $database = new mysqli("216.250.11.90", "wordpress", "{superSecretPassword!123}", "edoc");
} catch (Exception $e) {
    echo $e->getMessage();
}

//$database->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
//$database->options(MYSQLI_INIT_COMMAND, "SET NAMES 'utf8'");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}

?>