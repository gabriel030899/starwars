<?php
// Connect to the database and check the connection
try {
    $conn = mysqli_connect('localhost', 'root', '', 'starwarsdb');
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
}


// Select all infos from the database
//$sql = 'SELECT * FROM users';

//Make query and get result
//$result = mysqli_query($conn, $sql);

// Fetch the resulting rows as arrays
//$users = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>