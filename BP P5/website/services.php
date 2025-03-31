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

  <div class="service-block">
    <img src="../img/teeth cleaning.png" alt="Service 1">
    <div class="service-text">
        <h3>Tandarts Controle</h3>
        <p>Tijdens de periodieke tandartscontrole beoordelen wij de gezondheid van uw gebit en tandvlees zorgvuldig. Onze tandarts controleert uw tanden op gaatjes, slijtage en mogelijke problemen, en onderzoekt tevens uw tandvlees op ontstekingen of bloedingen. Indien nodig maken wij röntgenfoto’s voor een compleet beeld. Na de controle bespreken we onze bevindingen en geven we persoonlijk advies over mondhygiëne en preventieve maatregelen. Regelmatige controles helpen om problemen vroegtijdig op te sporen en voorkomen uitgebreidere behandelingen in de toekomst. Bij eventuele aandachtspunten plannen we samen met u een vervolgafspraak in. Ons doel is dat u met vertrouwen en een gezonde glimlach onze praktijk verlaat. Maak vandaag nog een afspraak voor uw controle en investeer in de gezondheid van uw gebit.</p>
    </div>
</div>

<div class="service-block">
    <img src="../img/ortho.png" alt="Service 2">
    <div class="service-text">
        <h3>Wortelkanaal Behandeling</h3>
        <p>Een wortelkanaalbehandeling is nodig als het tandweefsel (pulpa) ontstoken of afgestorven is door bijvoorbeeld diepe gaatjes of trauma. Tijdens deze behandeling verwijdert onze tandarts zorgvuldig het ontstoken weefsel uit de tandwortel, reinigt het wortelkanaal grondig en vult het daarna af met een speciale vulling. Dankzij moderne technieken en verdoving verloopt de behandeling vrijwel pijnloos. Na de wortelkanaalbehandeling wordt de tand meestal hersteld met een duurzame vulling of kroon, zodat deze zijn functie en natuurlijke uiterlijk behoudt. Zo voorkomen we verdere ontstekingen en blijft uw eigen gebit behouden. Onze praktijk voert wortelkanaalbehandelingen professioneel en comfortabel uit, zodat u weer pijnvrij kunt eten, drinken en lachen. Heeft u klachten of vragen? Neem dan direct contact met ons op voor persoonlijk advies of het maken van een afspraak.</p>
    </div>
</div>

<div class="service-block">
    <img src="../img/mondh.png" alt="Service 3">
    <div class="service-text">
        <h3>Tanden Bleken</h3>
        <p>Een stralend witte glimlach zorgt voor meer zelfvertrouwen en een frisse uitstraling. In onze praktijk bieden wij veilige en effectieve tandenbleekbehandelingen aan die uw tanden zichtbaar witter maken. Wij gebruiken professionele bleekmethodes die het glazuur beschermen en voor langdurige resultaten zorgen. Tijdens een intakegesprek bekijkt onze tandarts eerst de conditie van uw gebit en bespreekt uw wensen en verwachtingen. Vervolgens voeren we de behandeling comfortabel en zorgvuldig uit. Afhankelijk van uw wensen kunt u kiezen voor een snelle behandeling in onze praktijk of een thuisbleekset onder professionele begeleiding. Het resultaat is een natuurlijke, witte glimlach waarmee u weer zorgeloos kunt lachen. Wilt u graag meer informatie over tanden bleken, of direct een afspraak maken? Neem contact met ons op, wij adviseren u graag persoonlijk.</p>
    </div>
</div>

<div class="service-block">
    <img src="../img/facings.png" alt="Service 4">
    <div class="service-text">
        <h3>Facings</h3>
        <p>Met facings creëer je eenvoudig een mooie, natuurlijke glimlach. Facings zijn dunne schildjes van porselein of composiet die over de eigen tanden worden geplaatst. Hiermee kunnen we kleine imperfecties, zoals verkleuringen, scheefstand, afgebroken hoekjes of spleetjes tussen tanden corrigeren. Tijdens een persoonlijk intakegesprek bespreken we je wensen en bekijken we welke oplossing het beste bij je past. De behandeling verloopt vrijwel pijnloos en zorgt direct voor een stralend resultaat. Porseleinen facings zijn duurzaam, kleurvast en nauwelijks te onderscheiden van natuurlijke tanden. Composiet facings zijn sneller aan te brengen en voordeliger, maar vragen wel iets meer onderhoud. Onze tandarts adviseert je graag welke optie het beste aansluit bij jouw wensen en situatie. Benieuwd wat facings voor jouw glimlach kunnen betekenen? Maak vrijblijvend een afspraak voor advies op maat.</p>
    </div>
</div>

<div class="service-block">
    <img src="../img/beugel.png" alt="Service 5">
    <div class="service-text">
        <h3>Beugels</h3>
        <p>Een mooie glimlach begint bij rechte en gezonde tanden. Met een orthodontische behandeling, oftewel een beugel, corrigeren we scheve tanden, overbeten en andere gebitsafwijkingen. Bij ons kun je terecht voor verschillende soorten beugels, zoals vaste slotjes (brackets), uitneembare beugels of transparante aligners (zoals Invisalign). Tijdens een eerste consult onderzoekt onze tandarts of orthodontist de stand van je gebit en bespreekt samen met jou de beste behandeling. Elke beugel wordt op maat gemaakt en afgestemd op jouw situatie en wensen. Wij begeleiden je persoonlijk gedurende het hele traject, zodat je altijd precies weet wat je kunt verwachten. Met moderne technieken zorgen we ervoor dat jouw beugelbehandeling comfortabel verloopt en zo kort mogelijk duurt. Wil je meer weten over onze beugelopties of meteen een afspraak plannen? Neem dan vrijblijvend contact met ons op en zet de eerste stap naar een prachtige glimlach!</p>
    </div>
</div>

<div class="service-block">
    <img src="../img/beugel.png" alt="Service 6">
    <div class="service-text">
        <h3>implantaten</h3>
        <p>Een implantaat is een duurzame oplossing om ontbrekende tanden of kiezen te vervangen. Het bestaat uit een titanium kunstwortel die stevig in het kaakbot wordt geplaatst en dient als stevige basis voor een kroon, brug of kunstgebit. Implantaten voelen en functioneren net als natuurlijke tanden, waardoor je weer met vertrouwen kunt lachen, eten en spreken. Onze ervaren tandarts bespreekt tijdens een intakegesprek uitgebreid de mogelijkheden en stelt een persoonlijk behandelplan op. De behandeling verloopt comfortabel dankzij moderne technieken en goede verdoving. Na de plaatsing volgt een herstelperiode waarin het implantaat stevig vastgroeit in het kaakbot, waarna de definitieve restauratie wordt geplaatst. Met goede verzorging gaan implantaten jarenlang mee. Wil je meer weten over implantaten of vrijblijvend advies ontvangen? Neem gerust contact met ons op voor een afspraak en ontdek hoe implantaten jouw gebit kunnen herstellen.</p>
    </div>
</div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container footer-content">
      <p>&copy; 2025 DentaCare. All Rights Reserved.</p>
      <p>Privacy Policy | Terms of Service</p>
    </div>
  </footer>
</body>
</html>