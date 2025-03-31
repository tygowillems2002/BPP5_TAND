<?php
require '../Database/db.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $db = new Database();

        // Haal de gegevens op uit het formulier
        $email = htmlspecialchars($_POST['email']);
        $wachtwoord = htmlspecialchars($_POST['wachtwoord']);
        $wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT); // Versleutel wachtwoord
        $naam = htmlspecialchars($_POST['naam']);
        $achternaam = htmlspecialchars($_POST['achternaam']);
        $straatnaam = htmlspecialchars($_POST['straatnaam']); // Correcte naam
        $huisnummer = htmlspecialchars($_POST['huisnummer']);
        $postcode = htmlspecialchars($_POST['postcode']);
        $woonplaats = htmlspecialchars($_POST['woonplaats']);
        $telefoonnummer = htmlspecialchars($_POST['telefoonnummer']);

        // Voeg de gegevens toe aan de database
        $db->insergegevens($email, $wachtwoord, $naam, $achternaam, $straatnaam, $huisnummer, $postcode, $woonplaats, $telefoonnummer);

        // Redirect naar de inlogpagina
        header('Location: inlog.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
    <link rel="stylesheet" href="../../css/inlog-css/registratie.css">
</head>
<body>
    <div class="form-container">
        <form method="POST">
            <div class="form-section">
                <h3>Persoonsgegevens</h3>
                <input type="text" name="naam" placeholder="Voornaam" required>
                <input type="text" name="achternaam" placeholder="Achternaam" required>
                <input type="email" name="email" placeholder="E-mailadres" required>
                <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
                <input type="tel" name="telefoonnummer" placeholder="Telefoonnummer" required>
            </div>

            <div class="form-section">
                <h3>Adresgegevens</h3>
                <input type="text" name="straatnaam" placeholder="Straatnaam" required>
                <input type="text" name="huisnummer" placeholder="Huisnummer" required>
                <input type="text" name="postcode" placeholder="Postcode" required>
                <input type="text" name="woonplaats" placeholder="Woonplaats" required>
            </div>

            <input type="submit" name="verzenden" value="Registreren">
        </form>
    </div>
</body>
</html>