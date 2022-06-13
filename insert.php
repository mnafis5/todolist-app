<?php
include 'connection.php';

    $act = $_POST['act'];
    $zaman = $_POST['zaman'];
    $sql = "INSERT INTO activities VALUES('','$act','$zaman')";
    $conn->query($sql);

    $conn->close();
    header('Location: index.php');
