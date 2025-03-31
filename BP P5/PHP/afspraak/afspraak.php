<?php
require '../Database/db.php';





if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    try{
        $pdo = new Database();
        $naam = htmlspecialchars($_POST['naam']);
        $achternaam = htmlspecialchars($_POST['achternaam']);
        $omschrijving = htmlspecialchars($_POST['omschrijving']);
        $geboortedatum = htmlspecialchars($_POST['geboortedatum']);
        $afspraakdatum = htmlspecialchars($_POST['afspraakdatum']);

     
        $pdo->afspraak($naam,$achternaam,$omschrijving,$geboortedatum,$afspraakdatum);
         header('refresh:2;url=afspraakOverzicht.php');
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}




?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak Maken</title>
    <link rel="stylesheet" href="../../css/inlog-css/afspraak.css">


</head>
<body>
    <form method="POST">
        <h2>Afspraak Maken</h2>

        <div class="form-group">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" placeholder="Voer uw naam in" required>
        </div>

        <div class="form-group">
            <label for="achternaam">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" placeholder="Voer uw achternaam in" required>
        </div>

        <div class="form-group">
            <label for="omschrijving">Omschrijving</label>
            <input type="text" id="omschrijving" name="omschrijving" placeholder="Omschrijving van de afspraak" required>
        </div>

        <div class="form-group">
            <label for="geboortedatum">Geboortedatum</label>
            <input type="date" id="geboortedatum" name="geboortedatum" required>
        </div>

        <div class="form-group">
            <label for="afspraakdatum">Afspraakdatum</label>
            <input type="date" id="afspraakdatum" name="afspraakdatum" required>
        </div>

        <input type="submit" name="submit" value="Afspraak Maken">
    </form>
</body>
</html>
