<?php

require '../../secredret.php';

session_start();

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    //print 'Det blev inge bra';
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());

} else



    if (!isset($_POST['username'], $_POST['password'])) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }

if ($stmt = $con->prepare('SELECT id, password FROM users WHERE name = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        //echo 'fann ett namn';
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedIn'] = TRUE;
            $_SESSION['userName'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../view');
        } else {
            // Incorrect password
            echo 'Incorrect username or password! Perhaps both! IDK i am script';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username or password! Perhaps both! IDK i am script';
    }

    $stmt->close();
}



?>