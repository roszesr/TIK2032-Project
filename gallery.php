<?php include 'includes/header.php'; ?>

<section>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
  <h2>My Projects Gallery</h2>
  <div>
    <?php
    // Contoh gambar gallery - bisa diganti dengan data dari database
    $gallery_images = [
      'project1.jpg' => 'Robotics Competition 2023',
      'project2.jpg' => 'Web Development Project',
      'project3.jpg' => 'IoT Workshop',
      'project4.jpg' => 'Campus Tech Event'
    ];
    
    foreach ($gallery_images as $image => $caption): 
    ?>
      <div>
        <img src="assets/images/gallery/<?= $image ?>" alt="<?= $caption ?>" width="300">
        <p><?= $caption ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
