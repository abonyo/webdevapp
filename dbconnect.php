<?php

$conn = null;

function connect(){
    $servername = "localhost";
    $username = "test";
    $password = "test";
    $database = 'anywatch';

    // Create connection
    global $conn;
    $conn = new mysqli($servername, $username, $password,$database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
}

function close(){
        global $conn;
        mysqli_close($conn);
}

?>
