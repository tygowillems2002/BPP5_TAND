<?php
require '../includes/db.php';

$db = new Database();

try {
  if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam']; 
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $telefoonnummer = $_POST['telefoonnummer'];

    $db->insergegevens($naam, $achternaam, $huisnummer, $postcode, $telefoonnummer);

    if(isset($_SESSION['']));
            



}   
}catch (PDOException $e){
    echo "Error: " . $e->getMessage();
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="naam" placeholder="u naam" required>
        <input type="text" name="achternaam" placeholder="u acthernaam" required>
        <input type="text" name="huisnummer" placeholder="u huisnummer" required>
        <input type="text" name="postcode" placeholder="u postcode" required>
        <input type="tel" name="telefoonnummer" placeholder="u telefoon nummer" required>
        <input type="submit" name= "verzenden">
    </form>
</body>
</html>