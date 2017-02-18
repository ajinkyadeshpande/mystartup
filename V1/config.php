<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="hr"; // Database name
$url="localhost"; // BaseURL

// Connect to server and select databse.
//mysqli_connect("$host", "$username", "$password") or die("cannot connect");

$link = mysqli_connect("$host", "$username", "$password", "$db_name");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>