<?php

//open connection
    $conn = mysqli_connect("localhost", "root", "", "dbnew");
    if (!$conn) {
        die('cannot connect to server');
    }
    