<?php
#we are going to import db_config file here since it contains all database configurations.text-center
#you can use include 'db_config' or one have used down here.
require '../../secredret.php';
#Create class for database. 
#declare your variables as public variables for global accessibility.

session_start();
// Change this to your connection info.


// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>