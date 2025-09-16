<ul>
    <li><a href="in.php">Home</a></li>
    <li><a href="schedule.php">Schedule</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<div style="position: absolute; bottom: 10px;left: 0px; width: 100%; text-align: center;">
    <form action="generate_schedule.php" method="POST">
        <button type="submit" style="padding: 20px 20px; background-color: #f4a825; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 16px; transition: background-color 0.3s;">
            Generate Schedule
        </button>
        <style>
            button:hover {
                background-color: gray;
            }
        </style>
    </form>
</div>