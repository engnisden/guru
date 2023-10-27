<?php


function checkForPlayer()
{

    require '../../secredret.php';

    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        //print 'Det blev inge bra';
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());

    } else {

        //hämtar och kollar user och player id
        if ($stmt1 = $con->prepare('SELECT playerId FROM userplayer WHERE userId = ?')) {
            // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
            $stmt1->bind_param('i', $_SESSION['id']);
            $stmt1->execute();
            // Store the result so we can check if the account exists in the database.
            $stmt1->store_result();

            if ($stmt1->num_rows > 0) {
                $stmt1->bind_result($id);
                $stmt1->fetch();

                //hämtar och kollar playerId
                if ($stmt2 = $con->prepare('SELECT playerId FROM players WHERE playerId = ?')) {
                    $stmt2->bind_param('i', $id);
                    $stmt2->execute();
                    $stmt2->store_result();
                    if ($stmt2->num_rows > 0) {
                        $stmt2->bind_result($playerId);
                        $stmt2->fetch();
                        $_SESSION['playerId'] = $playerId;
                        return true;
                    } else {
                        echo 'Incorrect username or password! Perhaps both! IDK i am script';
                    }
                } else {
                    echo 'Incorrect username or password! Perhaps both! IDK i am script';
                }

            } else {
                // Incorrect username
                echo 'Incorrect username or password! Perhaps both! IDK i am script';
            }

            $stmt->close();
        }
    }
}


?>