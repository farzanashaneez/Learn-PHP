<?php
$config = require '../config.php';

$conn = pg_connect(
    "host={$config['host']} port={$config['port']} dbname={$config['dbname']} user={$config['user']} password={$config['password']}"
);

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>