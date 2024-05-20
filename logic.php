<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//print data
$sql = "SELECT * FROM `task_list`";
$All_tasks = mysqli_query($conn, $sql);


if (isset($_POST['my_submit'])) {
  $task = $_POST['my_task'];
  $date = $_POST['my_date'];
  $sql = "INSERT INTO `task_list` (`task`, `date`) VALUES (?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $task, $date);
  $result = $stmt->execute();

  $stmt->close();

  // Redirect to index.php after inserting the task
  if ($result) {
    header("Location: index.php");
    exit();
  } else {
    header("Location: index.php?status=error");
    exit();
  }
}


// Fetch songs from the 'songs' table
$sql = "SELECT id, name, filepath FROM songs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songPath =  $row['filepath'];
    }
} else {
    echo "No songs found.";
}
