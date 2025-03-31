<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dental Clinic - Home</title>
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
        <li><a href="#hero">Home</a></li>
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

<!-- HERO SECTION -->
<section id="hero" class="hero-section">
  <div class="container hero-content">
    <div class="hero-text">
      <h1>Do it Professionally</h1>
      <?php if (!empty($_SESSION['login'])): ?>
        <a href="../PHP/afspraak/afspraak.php" class="btn-primary">Afspraak Boeken</a>
      <?php else: ?>
        <a href="../PHP/user/inlog.php" class="btn-primary">Afspraak Boeken</a>
      <?php endif; ?>
    </div>
  </div>
</section>

  <!-- SERVICES SECTION -->
  <section id="services" class="services-section">
    <div class="container">
      <h2>Onze behandelingen</h2>
      <div class="services-grid">
        <div class="service-item">
          <img src="../img/teeth cleaning.png" alt="Service 1" />
          <h3>Tandarts Controle</h3>
          <p>Periodieke tandartscontrole voor gezonde tanden en een frisse glimlach. Voorkom problemen, maak nu een afspraak!</p>
        </div>
        <div class="service-item">
          <img src="../img/wortel.png" alt="Service 2" />
          <h3>Wortelkanaal Behandeling</h3>
          <p>Professionele, pijnloze wortelkanaalbehandeling door ervaren specialisten. Veilig, hygiënisch en geruststellend voor iedere patiënt.</p>
        </div>
        <div class="service-item">
          <img src="../img/mondh.png" alt="Service 3" />
          <h3>Tanden Bleken</h3>
          <p>EProfessioneel tanden bleken voor een stralend witte glimlach bij onze ervaren tandartspraktijk. Veilig en effectief!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- REVIEWS SECTION -->
<section id="reviews" class="reviews-section">
  <div class="container">
    <h2>Wat onze patiënten zeggen</h2>
    <div class="reviews-grid">
      <div class="review-item">
        <div class="review-profile">
          <img src="../img/review1.png" alt="Profile 1" class="profile-img" />
        </div>
        <div class="review-content">
          <p>"Geweldige service! De tandartsen zijn vriendelijk en professioneel. Mijn glimlach is nog nooit zo mooi geweest!"</p>
          <h4>- Sophie Jansen</h4>
        </div>
      </div>
      <div class="review-item">
        <div class="review-profile">
          <img src="../img/profile2.jpg" alt="Profile 2" class="profile-img" />
        </div>
        <div class="review-content">
          <p>"Ik was altijd bang voor de tandarts, maar hier voelde ik me meteen op mijn gemak. Bedankt voor de geweldige zorg!"</p>
          <h4>- Mark de Vries</h4>
        </div>
      </div>
      <div class="review-item">
        <div class="review-profile">
          <img src="../img/profile3.jpg" alt="Profile 3" class="profile-img" />
        </div>
        <div class="review-content">
          <p>"De wortelkanaalbehandeling was volledig pijnloos. Ik raad deze kliniek aan iedereen aan!"</p>
          <h4>- Lisa van Dijk</h4>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- ABOUT SECTION -->
  <section id="about" class="about-section">
    <div class="container about-content">
      <div class="about-text">
        <h2>About Our Clinic</h2>
        <p>
          We are dedicated to providing top-tier dental care with modern equipment and highly trained professionals.
          Your comfort and satisfaction are our top priorities.
        </p>
        <p>
          Whether you need a routine check-up or specialized dental treatment, we are here to help you achieve and maintain a healthy, beautiful smile.
        </p>
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
