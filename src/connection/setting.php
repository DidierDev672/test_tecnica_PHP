<?php

$localhost = "localhost";
$user = "root";
$pwd = "123456";
$db = "test_technique";

$connection = mysqli_connect($localhost, $user, $pwd, $db);
if($connection->connect_errno){
    echo "Verdict in the connection to MySQL :(". $connection->connect_errno . ") "
    .$connection->connect_error;
}

//echo $connection->host_info . "\n";