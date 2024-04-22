<?php
echo "Hello";

$database = new mysqli("216.250.11.90", "wordpress", "{superSecretPassword!123}", "edoc");
$database->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
$database->options(MYSQLI_INIT_COMMAND, "SET NAMES 'utf8'");
echo "World";
if ($database->connect_error) {
    echo "error";
    die("Connection failed:  " . $database->connect_error);
}
echo "Connected successfully";

?>