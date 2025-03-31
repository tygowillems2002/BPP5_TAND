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

    public function insergegevens($email, $wachtwoord, $naam, $achternaam, $straatnaam, $huisnummer, $postcode, $woonplaats, $telefoonnummer) {
        $sql = $this->pdo->prepare("INSERT INTO register (email, wachtwoord, naam, achternaam, straatnaam, huisnummer, postcode, woonplaats, telefoonnummer) 
        VALUES (:email, :wachtwoord, :naam, :achternaam, :straatnaam, :huisnummer, :postcode, :woonplaats, :telefoonnummer)");
        $sql->execute([
            "email" => $email,
            "wachtwoord" => $wachtwoord,
            "naam" => $naam,
            "achternaam" => $achternaam,
            "straatnaam" => $straatnaam,
            "huisnummer" => $huisnummer,
            "postcode" => $postcode,
            "woonplaats" => $woonplaats,
            "telefoonnummer" => $telefoonnummer
        ]);
    }

    
    public function login($email){
        $sql = $this->pdo->prepare("SELECT * from register WHERE email = :email");
        $sql->execute([
            "email" => $email,
        ]);
        $result = $sql->fetch();
        return $result;
    }
    public function afspraak($naam, $achternaam, $omschrijving, $geboortedatum, $afspraakDatum) {
        $sql = $this->pdo->prepare("INSERT INTO afspraak (naam, achternaam, omschrijving, geboortedatum, afspraakDatum) 
        VALUES (:naam, :achternaam, :omschrijving, :geboortedatum, :afspraakDatum)");
        $sql->execute([
            "naam" => $naam,
            "achternaam" => $achternaam,
            "omschrijving" => $omschrijving,
            "geboortedatum" => $geboortedatum,
            "afspraakDatum" => $afspraakDatum
        ]);
    }

    public function selectData(){
        $sql = $this->pdo->query("SELECT * from afspraak");
        return $sql->fetchAll();
    }

    public function update($naam, $achternaam, $omschrijving, $geboortedatum, $afspraakDatum, $id) {
        $sql = $this->pdo->prepare("UPDATE afspraak SET naam = :naam, achternaam = :achternaam, omschrijving = :omschrijving, geboortedatum = :geboortedatum, afspraakDatum = :afspraakDatum WHERE id = :id");
        $sql->execute([
            "naam" => $naam,
            "achternaam" => $achternaam,
            "omschrijving" => $omschrijving,
            "geboortedatum" => $geboortedatum,
            "afspraakDatum" => $afspraakDatum,
            "id" => $id
        ]);
    }

    
}
?>