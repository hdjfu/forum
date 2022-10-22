<?php
function inserir($sql){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if ($conn->query($sql) === TRUE) {

    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
