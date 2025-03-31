<?php
require '../Database/db.php';
$pdo = new Database();
session_start();
if (empty($_SESSION['login'])) {
    header("Location: ../user/inlog.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afspraak Overzicht</title>
    <link rel="stylesheet" href="../../css/inlog-css/afspraakOverzich.css">
</head>
<body>
    
    <h2>Nieuwe afspraak</h2>
    <table>
        <tr>
            <th>id</th>
            <th>naam</th>
            <th>achternaam</th>
            <th>omschrijving</th>
            <th>geboortedatum</th>
            <th>afspraakdatum</th>
            <th>action</th>
        </tr>

        <?php
        $naam = $pdo->selectData();
        $today = date('Y-m-d'); 

        if (!empty($naam)) {
            foreach ($naam as $afspraak) {
                if ($afspraak['afspraakDatum'] >= $today) {
                    echo "<tr>";
                    echo "<td>" . $afspraak['id'] . "</td>";
                    echo "<td>" . $afspraak['naam'] . "</td>";
                    echo "<td>" . $afspraak['achternaam'] . "</td>";
                    echo "<td>" . $afspraak['omschrijving'] . "</td>";
                    echo "<td>" . $afspraak['geboortedatum'] . "</td>";
                    echo "<td>" . $afspraak['afspraakDatum'] . "</td>";
                    echo "<td><a href='afspraakUpdate.php?id=" . $afspraak['id'] . "'>update</a></td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "<tr><td colspan='7'>Geen nieuwe afspraken gevonden</td></tr>";
        }
        ?>
    </table>

    <h2>Oude afspraken</h2>
    <table>
        <tr>
            <th>id</th>
            <th>naam</th>
            <th>achternaam</th>
            <th>omschrijving</th>
            <th>geboortedatum</th>
            <th>afspraakdatum</th>
            <th>action</th>
        </tr>

        <?php
        if (!empty($naam)) {
            foreach ($naam as $afspraak) {
                if ($afspraak['afspraakDatum'] < $today) { 
                    echo "<tr>";
                    echo "<td>" . $afspraak['id'] . "</td>";
                    echo "<td>" . $afspraak['naam'] . "</td>";
                    echo "<td>" . $afspraak['achternaam'] . "</td>";
                    echo "<td>" . $afspraak['omschrijving'] . "</td>";
                    echo "<td>" . $afspraak['geboortedatum'] . "</td>";
                    echo "<td>" . $afspraak['afspraakDatum'] . "</td>";
                    echo "<td><a href='afspraakUpdate.php?id=" . $afspraak['id'] . "'>update</a></td>";
                    echo "</tr>";
                }
            }
        } else {
            echo "<tr><td colspan='7'>Geen oude afspraken gevonden</td></tr>";
        }
        ?>
    </table>
</body>
</html>