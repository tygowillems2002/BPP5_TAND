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
          <li><a href="overons.php" class="active">About Us</a></li>
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
        <h2>Over Onze Praktijk</h2>
        <p>
          Welkom bij DentaCare, waar uw glimlach onze hoogste prioriteit is. Onze tandartspraktijk staat bekend om het leveren van hoogwaardige tandheelkundige zorg in een moderne en gastvrije omgeving. Wij geloven dat een gezonde glimlach niet alleen bijdraagt aan uw uiterlijk, maar ook aan uw algehele welzijn en zelfvertrouwen.
        </p>
        <p>
          Ons team van ervaren en toegewijde tandheelkundige professionals staat klaar om u te helpen bij al uw tandheelkundige behoeften. Of het nu gaat om een periodieke controle, een professionele gebitsreiniging, of meer complexe behandelingen zoals kronen, bruggen of implantaten, wij bieden een breed scala aan diensten die zijn afgestemd op uw specifieke wensen en behoeften.
        </p>
        <p>
          Bij DentaCare maken we gebruik van de nieuwste technologieën en technieken om ervoor te zorgen dat u de best mogelijke zorg ontvangt. Onze moderne apparatuur en innovatieve behandelmethoden stellen ons in staat om nauwkeurige diagnoses te stellen en effectieve behandelingen te bieden, allemaal met uw comfort in gedachten.
        </p>
        <p>
          Wij begrijpen dat een bezoek aan de tandarts voor sommige mensen spannend kan zijn. Daarom doen wij er alles aan om een ontspannen en stressvrije ervaring te creëren. Ons vriendelijke en begripvolle team neemt de tijd om naar uw zorgen te luisteren en u op uw gemak te stellen, zodat u zich volledig kunt concentreren op uw mondgezondheid.
        </p>
        <p>
          Naast onze focus op tandheelkundige zorg, hechten wij veel waarde aan preventie. Wij geloven dat het voorkomen van tandheelkundige problemen net zo belangrijk is als het behandelen ervan. Daarom bieden wij uitgebreide voorlichting en advies om u te helpen een gezonde mondhygiëne te behouden.
        </p>
        <p>
          Bij DentaCare draait alles om u. Wij zijn trots op de langdurige relaties die we met onze patiënten opbouwen en streven ernaar om uw verwachtingen keer op keer te overtreffen. Laat ons u helpen om de gezonde, stralende glimlach te bereiken die u verdient. Neem vandaag nog contact met ons op en ervaar zelf waarom zoveel mensen voor DentaCare kiezen!
        </p>
      </div>
      <div class="about-image">
        <img src="../img/kliniek.png" alt="Onze Praktijk" />
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