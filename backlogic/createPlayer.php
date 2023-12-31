<?php

require '../../secredret.php';

session_start();

/*
echo 'testar: ';
echo $_POST['avatar'], ' ', $_POST['country'], ' ', $_POST['charname'], ' ';
*/

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
} else {

    if (!isset($_POST['charname'], $_POST['avatar'], $_POST['country'])) {
        // Could not get the data that should have been sent.
        exit('Please complete the create player form!');
    }
    // Make sure the submitted registration values are not empty.
    if (empty($_POST['charname']) || empty($_POST['avatar'] || empty($_POST['country']))) {
        // One or more values are empty.
        exit('Please complete the create player form!');
    }
    echo 'Försöker börja preppa sqlen';
    if ($stmt = $con->prepare('SELECT playerId FROM players WHERE charname = ?')) {
        echo 'Börjar preppa sqlen';
        // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
        $stmt->bind_param('s', $_POST['charname']);
        $stmt->execute();
        $stmt->store_result();
        // Store the result so we can check if the account exists in the database.
        if ($stmt->num_rows > 0) {
            // Username already exists
            echo 'Character name exists, please choose another !';
        } else {
            if ($stmt = $con->prepare('INSERT INTO players (charname, countryId, avatar) VALUES (?, ?, ?)')) {
                $stmt->bind_param('sss', $_POST['charname'], $_POST['country'], $_POST['avatar']);
                $stmt->execute();
                echo 'You have successfully created a character! You can now play!';

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