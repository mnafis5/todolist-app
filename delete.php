<?php

require_once 'connection.php';

$id = $_GET['id'];
$sql = "DELETE FROM activities WHERE id= " . $id;

$conn->query($sql);

$conn->close();
header('Location: index.php');