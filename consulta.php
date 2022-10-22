<?php

function consultar($sql, $column){
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

    //$sql = "SELECT id FROM teste where id =(SELECT MAX(id) FROM teste)";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        return $row["$column"];
        
        }
    } else {
        //echo "0 results";
    }
    $conn->close();
}