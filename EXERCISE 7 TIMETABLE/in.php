<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="clock-con.png">
    <title>TIMETABLE</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
</head>

<body>
<div class="container">
  <div class="sidebar">
    <h1>timetable</h1>
<?php include 'nav.php'; ?>
  </div>

  <div class="main">
    <div class="header">
      <h2>Tasks</h2>
      <input type="text" placeholder="Task search">
    </div>

    <div class="analytics">
      <div class="altcs">
        <strong>Number of Completed tasks</strong>
        <p>16</p>
      </div>

      <div class="altcs">
        <strong>Number of Important task</strong>
        <p>10</p>
      </div>
    </div>

    <div class="calendar">
        <h3>Today</h3>
        <div class="task" id="today-task-box">
        </div>
    </div>
</div>
</div>
</div>

<script>
    // get today's date
    const today = new Date();
    const todayKey = `${today.getFullYear()}-${today.getMonth()}-${today.getDate()}`;

    // load all tasks
    const tasks = JSON.parse(localStorage.getItem("tasks")) || {};
    const todayTasks = tasks[todayKey] || [];

    // where today's tasks will go poof
    const taskContainer = document.getElementById("today-task-box");

    if (todayTasks.length > 0) {
      const title = document.createElement("strong");
      title.textContent = "Today's Tasks:";
      taskContainer.appendChild(title);

      todayTasks.forEach(task => {
        const taskItem = document.createElement("p");
        taskItem.textContent = task;
        taskContainer.appendChild(taskItem);
      });
    } else {
      const noTask = document.createElement("p");
      noTask.textContent = "No tasks for today.";
      taskContainer.appendChild(noTask);
    }
  </script>
</body>
</html>