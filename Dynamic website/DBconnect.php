<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'WEBWORK';

$CONNECT = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$CONNECT) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>

 