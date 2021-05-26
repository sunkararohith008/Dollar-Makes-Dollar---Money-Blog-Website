
<?php

$host = 'localhost';
$user = 'dinesh9199';
$pass = 'Letsmake@21';
$db_name = 'moneyblog';

// $host = '172.31.22.43';
// $user = 'Arshveer200451204';
// $pass = 'CHg7wQr39n';
// $db_name = 'Arshveer200451204';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
