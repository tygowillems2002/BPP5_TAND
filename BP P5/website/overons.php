<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dental Clinic - About Us</title>
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
        <a href="index.php">DentaCare</a>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="about.php" class="active">About Us</a></li>
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

  <!-- ABOUT SECTION -->
  <section id="about" class="about-section">
    <div class="container about-content">
      <div class="about-text">
        <h2>About Our Clinic</h2>
        <p>
          At DentaCare, we are committed to providing exceptional dental care in a comfortable and modern environment.
          Our team of highly skilled professionals uses the latest technology to ensure your dental health and satisfaction.
        </p>
        <p>
          From routine check-ups to advanced dental procedures, we are here to help you achieve a healthy and radiant smile.
          Your comfort and trust are our top priorities.
        </p>
      </div>
      <div class="about-image">
        <img src="../img/clinic.jpg" alt="Our Clinic" />
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