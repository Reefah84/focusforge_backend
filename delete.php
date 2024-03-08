<?php
include 'logic.php'; // Ensure this file contains the necessary database connection logic
include 'head.php';
// Check if the delete operation is triggered with a POST request
if (isset($_POST['delete']) && isset($_POST['id'])) {
    $taskId = $_POST['id'];

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM `task_list` WHERE `id` = ?");
    $stmt->bind_param("i", $taskId); // "i" indicates the parameter type is an integer
    $stmt->execute();

    // Check if the DELETE operation was successful
    if ($stmt->affected_rows > 0) {
        $stmt->close();
        $conn->close();
        header("Location: index.php?status=deleted");
        exit();
    } else {
        echo "Error deleting task: " . $conn->error;
    }

    $stmt->close();
} else {
    // Redirect back if the necessary data isn't provided
    header("Location: index.php?status=error");
    exit();
}
$conn->close();