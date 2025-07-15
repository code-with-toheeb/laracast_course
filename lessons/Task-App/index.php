<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task Manager</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      padding: 40px;
      max-width: 600px;
      margin: auto;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .task {
      background: #fff;
      padding: 15px;
      margin: 10px 0;
      border-left: 5px solid #007bff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
    }

    .task.done {
      text-decoration: line-through;
      color: #999;
      border-left-color: green;
    }

    form {
      display: flex;
      margin-top: 20px;
    }

    input[type="text"] {
      flex: 1;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background: #007bff;
      color: white;
      border: none;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }
  </style>

  
</head>
<body>

<?php

  $tasks = [];

  array_push($tasks, $_POST["new_task"]);

 function addTask($tasks)
 {
    $taskAdded = [];

    foreach ($tasks as $task)
    {
        $taskAdded[] = $task;
    }

    return $taskAdded;


 }
  



?>

<h1>📋 My Task List</h1>

  <!-- Task List -->
<div class="task-list">
    <!--<div class="task">Learn PHP <button>Mark Done</button></div>
    <!--<div class="task done">Read Book <button>Mark Done</button></div>
    <div class="task"><button>Mark Done</button></div>-->
   <?php foreach (addTask($tasks) as $task) :?>
    <div class="task"><?= $task ?> <button>Mark Done</button></div>
    
    <!-- You’ll generate these dynamically with PHP -->
   <?php endforeach ; ?>
</div>

  <!-- Add Task Form -->
<form action="index.php" method="post">
    <input type="text" name="new_task" placeholder="Enter new task..." required>
    <button type="submit">Add Task</button>
</form>

</body>
</html>
