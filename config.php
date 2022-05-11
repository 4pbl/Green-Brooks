<?php
//Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'pranav');
define('DB_PASSWORD', '2107');
define('DB_NAME', 'login');
 
//Connection to MySQL Database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>