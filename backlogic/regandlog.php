<?php




require '../../secredret.php';



echo $DATABASE_HOST;


//session_start();


$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    print 'Det blev inge bra';
    //exit('Failed to connect to MySQL: ' . mysqli_connect_error());

} else {
    print "databaskoppling fungerade";
}

/*
if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
} else {
    echo "Tjena mannen";
}
*/
echo "Filen öppnas"
    ?>