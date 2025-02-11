<?php
require '../includes/db.php';




try {
  if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $db = new Database();
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $wachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    $db->insermail($email, $wachtwoord);
    header("Location:gegevens.php");


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
        <input type="submit" name= "verzenden">
    </form>
</body>
</html>