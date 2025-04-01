<?php
// Process the contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Sanitize inputs
  $name    = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
  $email   = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');
  $message = htmlspecialchars($_POST['message'] ?? '', ENT_QUOTES, 'UTF-8');

  // Here, you can add code to send an email or store the submission.
  // For now, we'll simply set a flag for a success message.
  $contactSuccess = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us - DentaCare</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
</head>
<body>
<!-- HEADER -->
<header class="site-header">
  <div class="container nav-container">
    <div class="logo">
      <a href="index.php">
        <img src="../img/logo.png" alt="DentaCare Logo" class="logo-img" />
      </a>
    </div>
    <nav class="main-nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="overons.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    <div class="header-buttons">
      <?php if (!empty($_SESSION['login'])): ?>
        <a href="../PHP/user/uitlog.php" class="btn-secondary">Log Out</a>
      <?php else: ?>
        <a href="../PHP/user/registratie.php" class="btn-primary">Registreren</a>
        <a href="../PHP/user/inlog.php" class="btn-secondary">Log In</a>
      <?php endif; ?>
    </div>
  </div>
</header>

  <!-- CONTACT SECTION -->
  <section id="contact" class="contact-section">
    <div class="container">
      <h2>Contact Ons</h2>
      <p>Vragen voor onze tandartspraktijk?</p>
      <?php if (isset($contactSuccess) && $contactSuccess): ?>
        <p class="success-message">Thank you for contacting us. We will be in touch soon!</p>
      <?php endif; ?>
      <form class="contact-form" method="POST" action="">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Naam.." required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="naam@voorbeeld.nl" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="Jouw bericht..." required></textarea>
        </div>
        <button type="submit" class="btn-primary">Verzenden</button>
      </form>
    </div>
    <div class="map-container">
      <h3>Onze Locatie</h3>
      <div class="map-wrapper">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2426.084159462878!2d4.895167815749663!3d52.37021577978686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c11d0c6b6f%3A0x4021a82f1f97050!2sAmsterdam%2C%20Netherlands!5e0!3m2!1sen!2sus!4v1610000000000!5m2!1sen!2sus" 
          width="100%" 
          height="400" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container footer-content">
      <p>&copy; 2025 DentaCare. All Rights Reserved.</p>
      <p>Privacy Policy | Terms of Service</p>
    </div>
  </footer>
</body>
</html>
