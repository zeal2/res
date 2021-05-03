<?php
//Development coonection
//$host="localhost"; // Host name
//$username="root"; // Mysql username
//$password=""; // Mysql password
//$db_name="railres"; // Database name

//remote db connection
$host="remotemysql.com"; // Host name
$username="11G012W6Tq"; // Mysql username
$password="IFZmUUrr9T"; // Mysql password
$db_name=" 11G012W6Tq"; // Database name

$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

?>