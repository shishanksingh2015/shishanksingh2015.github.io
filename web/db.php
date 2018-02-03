<?php
/**
 * Database Config File
 *
 */

# DATABASE HOST NAME
define('DB_HOSTNAME', 'localhost');

# DATABASE USERNAME
define('DB_USERNAME', 'root');

# DATABASE PASSWORD
define('DB_PASSWORD', 'root');

# DATABASE NAME
define('DB_NAME', 'odyssey');

$connection = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($connection->connect_errno) {
    die("Failed to connect to MySQL: " . $connection->connect_error);
}
?>




