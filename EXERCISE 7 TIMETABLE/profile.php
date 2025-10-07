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
  
<div class="profile-box">
    <div class="profile-card">
        <img src="image/Hermoso.jpg" alt="pfp" class="profile-pic">
        <h1 class="name">Sean Carlo Hermoso</h1>
        <p class="bio">4th Year - BSIT</p>
    </div>
    <div class="profile-card">
        <img src="image/calip.jpg" alt="pfp" class="profile-pic">
        <h1 class="name">Kristin Chine Calip</h1>
        <p class="bio">4th Year - BSIT</p>
    </div>
    <div class="profile-card">
        <img src="image/profile.png" alt="pfp" class="profile-pic">
        <h1 class="name">Kyla Gosim Brioso</h1>
        <p class="bio">4th Year - BSIT</p>
    </div>
</div>
<div class="profile-box">
    <div class="profile-card">
        <img src="image/profile.png" alt="pfp" class="profile-pic">
        <h1 class="name">Janin Blasco</h1>
        <p class="bio">4th Year - BSIT</p>
    </div>
    <div class="profile-card">
        <img src="image/profile.png" alt="pfp" class="profile-pic">
        <h1 class="name">Renjard Jardin</h1>
        <p class="bio">4th Year - BSIT</p>
    </div>
    <div class="profile-card">
        <img src="image/kristel.jpg" alt="pfp" class="profile-pic">
        <h1 class="name">Kristel Ladot</h1>
        <p class="bio">3rd Year - BSIT</p>
    </div>
</div>
<div class="profile-box">
    <div class="profile-card">
        <img src="image/profile.png" alt="pfp" class="profile-pic">
        <h1 class="name">Lea Antonette Leong</h1>
        <p class="bio">3rd Year - BSIT</p>
    </div>
    <div class="profile-card">
        <img src="image/profile.png" alt="pfp" class="profile-pic">
        <h1 class="name">Christian Arellano Datoy</h1>
        <p class="bio">3rd Year - BSIT</p>
    </div>
    <div class="profile-card">
        <img src="image/Raph.jpg" alt="pfp" class="profile-pic">
        <h1 class="name">Raphael Andaya</h1>
        <p class="bio">3rd Year - BSIT</p>
    </div>
</div>

<div class="profile-box">
    <div class="subs-box">
        <div class="subs-card">
            <img src="image/view offers.jpg" alt="pfp" class="subs-pic">
            <button class="subs-btn">View Offerss</button>
    </div>
</div>
</div>

<script>
    gsap.from(".profile-card", {
    duration: 1,
    scale: 0,
    opacity: 0,
    ease: "back.out(1.7)"
});

gsap.from(".profile-pic", {
    duration: 1,
    y: -50,
    opacity: 0,
    delay: 0.5,
    ease: "power2.out"
});

gsap.from(".name", {
    duration: 1,
    x: -50,
    opacity: 0,
    delay: 0.7,
    ease: "power2.out"
});

gsap.from(".bio", {
    duration: 1,
    x: 50,
    opacity: 0,
    delay: 0.9,
    ease: "power2.out"
});

gsap.from(".subs-card", {
    duration: 1,
    scale: 0,
    opacity: 0,
    ease: "back.out(1.7)"
});

gsap.from(".contact-btn", {
    duration: 1,
    y: 20,
    opacity: 0,
    delay: 1.1,
    ease: "power2.out"
});
</script>

</body>

</html>



