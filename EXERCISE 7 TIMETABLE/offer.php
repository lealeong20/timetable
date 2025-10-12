<?php
$offers = [
  ["title" => "Offer 1", "description" => "Description here", "image" => "view offers.png"],
  ["title" => "Offer 2", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 3", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 4", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 5", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 6", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 7", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 8", "description" => "Description here", "image" => "view offers.jpg"],
  ["title" => "Offer 9", "description" => "Description here", "image" => "view offers.jpg"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offers</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      padding: 20px;
    }
    .offers-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 50px;
      padding: 20px;
    }
    .offer-card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 450px;
    }
    .offer-card img {
      width: 80px;
      height: 80px;
      margin-bottom: 10px;
    }
    .offer-card h3 {
      margin: 10px 0;
      font-size: 1.2em;
    }
    .offer-card p {
      color: #444;
      font-weight: bold;
    }
    .offer-card button {
      margin-top: 10px;
      padding: 8px 16px;
      border: none;
      border-radius: 8px;
      background: #007bff;
      color: white;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="profile-box">
    <div class="offers-grid">
      <?php foreach($offers as $offer): ?>
        <div class="offer-card">
          <img src="<?= htmlspecialchars($offer['image']) ?>" alt="offer" class="subs-pic">
          <h3><?= htmlspecialchars($offer['title']) ?></h3>
          <p><?= htmlspecialchars($offer['description']) ?></p>
          <button>Select</button>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
<script>
    gsap.from(".offer-card", {
      duration: 1,
      scale: 0,
      opacity: 0,
      ease: "back.out(1.7)"
    });

    gsap.from(".subs-pic", {
      duration: 1,
      y: -50,
      opacity: 0,
      delay: 0.5,
      ease: "power2.out"
    });
</script>

</body>
</html>
