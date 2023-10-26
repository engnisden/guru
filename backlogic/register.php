<?php

require '../../secredret.php';

session_start();



$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    //print 'Det blev inge bra';
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());

} else {



    if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the registration form!');
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
        // One or more values are empty.
        exit('Please complete the registration form');
    }

    if (preg_match('/^[a-zA-ZåÅäÄöÖ]+$/', $_POST['username']) == 0 || preg_match('/^[Z0-9]+$/', $_POST['username'] == 0)) {
        exit('Username is not valid!');
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        exit('Email is not valid!');
    }
    if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        exit('Password must be between 5 and 20 characters long!');

        if ($stmt = $con->prepare('SELECT id, password FROM users WHERE name = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
            $stmt->bind_param('s', $_POST['username']);
            $stmt->execute();
            $stmt->store_result();
            // Store the result so we can check if the account exists in the database.
            if ($stmt->num_rows > 0) {
                // Username already exists
                echo 'Username exists, please choose another!';
            } else {
            }
            echo 'trying to insert';
            if ($stmt = $con->prepare('INSERT INTO users (name, password, email, activation_code) VALUES (?, ?, ?, ?)')) {
                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $uniqid = uniqid();
                $stmt->bind_param('ssss', $_POST['username'], $password, $_POST['email'], $uniqid);
                $stmt->execute();
                echo 'Trying to assing vars';
                $from = 'noreply@engelmark.org';
                $subject = 'Account Activation Required';
                $headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $from . "\r\n" . 'X-Mailer: PHP/' . phpversion() . "\r\n" . 'MIME-Version: 1.0' . "\r\n" . 'Content-Type: text/html; charset=UTF-8' . "\r\n";
                // Update the activation variable below
                $activate_link = 'http://yourdomain.com/phplogin/activate.php?email=' . $_POST['email'] . '&code=' . $uniqid;
                $message = '<p>Please click the following link to activate your account: <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
                echo 'Trying to mail';
                if (mail($_POST['email'], $subject, $message, $headers)) {
                    echo 'Please check your email to activate your account!';
                }
                echo 'something went wrong';

            } else {
                // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all three fields.
                echo 'Could not prepare statement!';
            }
        }
        $stmt->close();
    } else {
        // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
    }
    $con->close();
}


?>