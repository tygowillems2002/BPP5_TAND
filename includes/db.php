<?php
class Database {
    public $pdo;

    public function __construct ($db = "tandartss", $user="root", $pwd="", $host="localhost") {
            try {
            $this->pdo = new PDO ("mysql: host=$host; dbname=$db", $user, $pwd) ;
        }    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }       
    }

    public function insermail($email,$wachtwoord){
        $sql = $this->pdo->prepare("INSERT INTO register(email,wachtwoord) VALUES (:email,:wachtwoord)");
        $sql->execute([
            "email" => $email,
            "wachtwoord" => $wachtwoord
        ]);
    }

    public function insergegevens($naam, $achternaam, $huisnummer, $postcode, $telefoonnummer) {
        $sql = $this->pdo->prepare("INSERT INTO gegevens ( registerID, naam, achternaam, huisnummer, postcode, telefoonnummer) 
        VALUES (:registerID, :naam, :achternaam, :huisnummer, :postcode, :telefoonnummer)");
        $sql->execute([
            "naam" => $naam,
            "achternaam" => $achternaam,
            "huisnummer" => $huisnummer,
            "postcode" => $postcode,
            "telefoonnummer" => $telefoonnummer
        ]);
    }
    
}
?>