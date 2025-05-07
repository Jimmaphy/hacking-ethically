<?php
    if (isset($_POST['message'])) {
        $servername = "sql";
        $username = "root";
        $password = "root";
        $database = "ehc_css";
        $message = $_POST["message"];
    
        $connection = new mysqli($servername, $username, $password, $database);
        $query = $connection -> prepare("INSERT INTO message (message) VALUES (?)");

        if ($connection->connect_error) {
            die("Connection failed: " . mysqli_connect_error());
        }
           
        $query->bind_param("s", $message);
        $query->execute();
        $query->close();

        mysqli_close($db);
        http_response_code(200);
    }