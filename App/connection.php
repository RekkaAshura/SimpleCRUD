<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "techexamdb"; /* Database name */

$con = mysqli_connect($host, $user, $password, $dbname); //connecting to the database
if (!$con) {
 die("Connection failed: " . mysqli_connect_error()); //terminates the execution
}
