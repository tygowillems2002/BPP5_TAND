<?php
require '../Database/db.php';
session_start();    

if (!empty($_SESSION['login'])) {
    header("Location: Dashboard.php");
    exit();
}

$foutmelding = ""; // Variabele om foutmeldingen op te slaan

try {
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $db = new Database();
        $email = htmlspecialchars($_POST['email']);
        $wachtwoord = htmlspecialchars($_POST['wachtwoord']);

        $login = $db->login($email);

        if ($login && password_verify($_POST['wachtwoord'], $login['wachtwoord'])) {
            $_SESSION['login'] = true;
            header('Location: ../../website/index.php'); // Redirect naar de homepage
            exit();
        } else {
            $foutmelding = "De ingevoerde gegevens zijn onjuist. Probeer het opnieuw.";
        }
    }
} catch (PDOException $e) {
    $foutmelding = "Er is een fout opgetreden. Probeer het later opnieuw.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="../../CSS/inlog-css/inlog.css">
</head>
<body>
    <div class="form">
        <h1>Log In</h1>

        <?php if (!empty($foutmelding)): ?>
            <div class="error-message">
                <?= htmlspecialchars($foutmelding) ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <input type="text" name="email" placeholder="E-mailadres" required>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required>
            <input type="submit" value="Inloggen">
        </form>
    </div>
</body>
</html>