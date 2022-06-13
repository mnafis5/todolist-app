<?php
require_once 'connection.php';

    $sql = "SELECT * FROM activities ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0 ) {
        $row = $result->fetch_all();
    } else {
        echo "You do not have any activity.";
    }
    




