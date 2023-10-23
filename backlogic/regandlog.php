<?php




require '../../secredret.php';


session_start();



$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    //print 'Det blev inge bra';
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());

} else {
    print "databaskoppling fungerade";
}



if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM users WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();


    $stmt->close();
}


echo "Filen öppnas"
    ?>