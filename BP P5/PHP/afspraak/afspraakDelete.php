<?php
require '../Database/db.php';
$pdo = new Database();
session_start();

if (empty($_SESSION['login'])) {
    header("Location: ../user/inlog.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare and execute the delete query
    $stmt = $pdo->prepare("DELETE FROM afspraken WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: afspraakOverzicht.php?message=Afspraak verwijderd");
        exit();
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van de afspraak.";
    }
} else {
    header("Location: afspraakOverzicht.php");
    exit();
}
?>