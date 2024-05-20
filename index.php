<?php
include 'logic.php';
include 'head.php';
?>
<h1 class="title"
    style="text-align: center; margin-top: 30px; font-size: 50px; color: white; justify-content: center; align-items: center; font-family: 'Kode Mono', monospace; ">
    To-Do List</h1>
<div class="form-container">
    <form method="POST" action="logic.php">
        <div class="mb-3">
            <label for="taskInput" class="form-label">Task</label>
            <input name="my_task" type="text" class="form-control" id="taskInput" aria-describedby="taskHelp"
                placeholder="Enter your task">
        </div>
        <div class="mb-3">
            <label for="dateInput" class="form-label">Completion Date</label>
            <input name="my_date" type="date" class="form-control" id="dateInput">
        </div>
        <div class="text-center">
            <button name="my_submit" type="submit" class="btn btn-primary">Add to List</button>
        </div>
    </form>
</div>
<div class="table-container"
    style="display: flex; justify-content: center; padding:5px; max-height: 500px; overflow-y: auto;  background-color: rgba(242,242,242,255); margin-top: 30px; margin-left: 300px; margin-right: 300px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <table class="table table-white table-striped">
        <tr>
            <th>Serial</th>
            <th>Task Name</th>
            <th>Task Completion Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($All_tasks as $key => $task) { ?>
            <tr>
                <td>
                    <?php echo $key + 1; ?>
                </td>
                <td>
                    <?php echo $task['task']; ?>
                </td>
                <td>
                    <?php echo $task['date']; ?>
                </td>
                <td>
                    <form action="delete.php" method="POST" style="display: inline;"
                        onsubmit="return confirm('Are you sure you want to delete this task?');">
                        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
include 'footer.php';
?>