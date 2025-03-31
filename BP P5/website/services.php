<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dental Clinic - Services</title>
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
          <li><a href="about.php">About Us</a></li>
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

  <!-- SERVICES SECTION -->
  <section id="services" class="services-section">
    <div class="container">
      <h2>Onze behandelingen</h2>
      <div class="services-list">
        <div class="service-item">
          <img src="../img/teeth cleaning.png" alt="Service 1" />
          <div class="service-content">
            <h3>Tandarts Controle</h3>
            <p>Periodieke tandartscontrole voor gezonde tanden en een frisse glimlach. Voorkom problemen, maak nu een afspraak!</p>
          </div>
        </div>
        <div class="service-item">
          <img src="../img/wortel.png" alt="Service 2" />
          <div class="service-content">
            <h3>Wortelkanaal Behandeling</h3>
            <p>Professionele, pijnloze wortelkanaalbehandeling door ervaren specialisten. Veilig, hygiënisch en geruststellend voor iedere patiënt.</p>
          </div>
        </div>
        <div class="service-item">
          <img src="../img/mondh.png" alt="Service 3" />
          <div class="service-content">
            <h3>Tanden Bleken</h3>
            <p>Professioneel tanden bleken voor een stralend witte glimlach bij onze ervaren tandartspraktijk. Veilig en effectief!</p>
          </div>
        </div>
        <div class="service-item">
          <img src="../img/service4.png" alt="Service 4" />
          <div class="service-content">
            <h3>Implantaten</h3>
            <p>Hoogwaardige tandheelkundige implantaten voor een natuurlijke en duurzame oplossing bij ontbrekende tanden.</p>
          </div>
        </div>
        <div class="service-item">
          <img src="../img/service5.png" alt="Service 5" />
          <div class="service-content">
            <h3>Orthodontie</h3>
            <p>Rechte tanden en een perfecte glimlach met onze professionele orthodontische behandelingen.</p>
          </div>
        </div>
        <div class="service-item">
          <img src="../img/service6.png" alt="Service 6" />
          <div class="service-content">
            <h3>Parodontologie</h3>
            <p>Specialistische zorg voor gezond tandvlees en het voorkomen van tandvleesproblemen.</p>
          </div>
        </div>
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