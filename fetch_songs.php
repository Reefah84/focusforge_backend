<?php
include 'logic.php';

$sql = "SELECT id, name, filepath FROM songs";
$result = $conn->query($sql);

$songs = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = $row;
    }
}

echo json_encode($songs);