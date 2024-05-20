<?php
include 'logic.php'; // Ensure this file contains the necessary database connection logic
include 'head.php';
// Check for the id parameter
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$taskId = $_GET['id'];

if (isset($_GET['id'])) {
    $stmt = $conn->prepare("SELECT `task`, `date` FROM `task_list` WHERE `id` = ?");
    $stmt->bind_param("i", $taskId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $task = $row['task'];
        $date = $row['date'];
    } else {
        echo "No task found with that ID.";
        exit;
    }
    $stmt->close();
}

//FORM IS SUBMITTED OR NOT
if (isset($_POST['update'])) {
    $task = $_POST['my_task'];
    $date = $_POST['my_date'];

    $stmt = $conn->prepare("UPDATE `task_list` SET `task` = ?, `date` = ? WHERE `id` = ?");
    $stmt->bind_param("ssi", $task, $date, $taskId);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: index.php?status=updated");
        exit();
    } else {
        echo "Error updating task: " . $conn->error;
    }
    $stmt->close();
}
?>
<h2 style="color: white;
    font-size: 40px;
    margin-bottom: 10px;
    margin-top: 10px;
    text-align: center;
    justify-content: center; 
    align-items: center; ">Edit Task</h2>
<div class="form-container">
    <form method="POST" action="edit.php?id=<?php echo htmlspecialchars($taskId); ?>">
        <div class="mb-3">
            <label for="taskInput" class="form-label">Task</label>
            <input name="my_task" type="text" class="form-control" value="<?php echo htmlspecialchars($task); ?>">
        </div>
        <div class="mb-3">
            <label for="dateInput" class="form-label">Completion Date</label>
            <input name="my_date" type="date" class="form-control" value="<?php echo htmlspecialchars($date); ?>">
        </div>
        <button name="update" type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>
<?php
$conn->close();
?>