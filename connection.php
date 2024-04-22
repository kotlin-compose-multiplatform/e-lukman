<?php
echo "Hello";

try {
    $database = new mysqli("216.250.11.90", "wordpress", "{superSecretPassword!123}", "edoc");
} catch (Exception $e) {
    echo $e->getMessage();
}

//$database->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, false);
//$database->options(MYSQLI_INIT_COMMAND, "SET NAMES 'utf8'");
echo "World";
if ($database->connect_error) {
    echo "<pre>" . $database->connect_error . "</pre>";
    die("Connection failed:  " . $database->connect_error);
}
echo "Connected successfully";

?>