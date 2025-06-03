<?php
include 'includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $subject = mysqli_real_escape_string($conn, $_POST['subject']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

  mysqli_query($conn, "INSERT INTO messages (name, email, subject, message) 
                      VALUES ('$name', '$email', '$subject', '$message')");
  $success = "Thank you! Your message has been sent.";
}

include 'includes/header.php'; 
?>

<section>
<head>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
  <h2>Contact Me</h2>
  
  <?php if (isset($success)): ?>
    <div style="color: green;"><?= $success ?></div>
  <?php endif; ?>
  
  <form method="POST">
    <div>
      <label>Your Name:</label>
      <input type="text" name="name" required>
    </div>
    
    <div>
      <label>Email:</label>
      <input type="email" name="email" required>
    </div>
    
    <div>
      <label>Subject:</label>
      <input type="text" name="subject" required>
    </div>
    
    <div>
      <label>Message:</label>
      <textarea name="message" rows="5" required></textarea>
    </div>
    
    <button type="submit">Send Message</button>
  </form>
  
  <div>
    <h3>Other Contact Info</h3>
    <p>Email: audiakalambia026@student.unsrat.ac.id</p>
    <p>Phone: +62812345678</p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
