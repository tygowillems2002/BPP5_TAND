<?php
require '../includes/db.php';
session_start();    


try {
  if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $db = new Database();
    $email = htmlspecialchars($_POST['email']);
    $wachtwoord = htmlspecialchars($_POST['wachtwoord']);
    $wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    $login = $db->inlog($email);



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
        <input type="text" name="email" placeholder="u email" required>
        <input type="password" name="wachtwoord" placeholder="u wachtwoord" required>
        <input type="text" name="naam" placeholder="u naam" required>
        <input type="text" name="achternaam" placeholder="u acthernaam" required>
        <input type="text" name="huisnummer" placeholder="u huisnummer" required>
        <input type="text" name="postcode" placeholder="u postcode" required>
        <input type="tel" name="telefoonnummer" placeholder="u telefoon nummer" required>
        <input type="submit" name= "verzenden">
    </form>
</body>
</html>