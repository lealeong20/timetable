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

  <div class="day-container">
    <h2 id="day-title">Tasks for [Day]</h2>
    <p id="date-display"></p>

    <div class="task-input">
      <input type="text" id="new-task" placeholder="Add a new task...">
      <button onclick="addTask()">Add Task</button>
    </div>

    <div class="task-list" id="task-list">
    </div>
  </div>
</div>

<script>
    const dayMap = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    const params = new URLSearchParams(window.location.search);
    const dateParam = params.get('date');
  
    const taskList = document.getElementById('task-list');
    const dateDisplay = document.getElementById('date-display');
    const dayTitle = document.getElementById('day-title');
    const newTaskInput = document.getElementById('new-task');
  
    let taskKey = '';
    let tasks = JSON.parse(localStorage.getItem('tasks') || '{}');
  
    function renderTasks() {
      taskList.innerHTML = '';
      const dayTasks = tasks[taskKey] || [];
      
      if (dayTasks.length === 0) {
        taskList.innerHTML = '<p>No tasks for this day.</p>';
      } else {
        dayTasks.forEach((task, index) => {
          const div = document.createElement('div');
          div.className = 'task';
          div.innerHTML = `
            ${task}
            <button onclick="removeTask(${index})" style="float:right; background:red; color:white; border:none; padding:2px 8px; border-radius:4px;">X</button>
          `;
          taskList.appendChild(div);
        });
      }
    }
  
    function addTask() {
      const taskText = newTaskInput.value.trim();
      if (!taskText) return;
  
      if (!tasks[taskKey]) tasks[taskKey] = [];
      tasks[taskKey].push(taskText);
      localStorage.setItem('tasks', JSON.stringify(tasks));
      newTaskInput.value = '';
      renderTasks();
    }
  
    function removeTask(index) {
      tasks[taskKey].splice(index, 1);
      localStorage.setItem('tasks', JSON.stringify(tasks));
      renderTasks();
    }
  
    if (dateParam) {
      const dateObj = new Date(dateParam);
      taskKey = `${dateObj.getFullYear()}-${dateObj.getMonth()}-${dateObj.getDate()}`;
      dateDisplay.textContent = dateObj.toDateString();
      dayTitle.textContent = `Tasks for ${dayMap[dateObj.getDay()]}`;
      renderTasks();
    } else {
      dateDisplay.textContent = 'Invalid date.';
    }
  </script>
  
</body>
</html>