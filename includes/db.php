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

    public function insergegevens($email,$wachtwoord,$naam, $achternaam, $huisnummer, $postcode, $telefoonnummer) {
        $sql = $this->pdo->prepare("INSERT INTO register (email,wachtwoord, naam, achternaam, huisnummer, postcode, telefoonnummer) 
        VALUES ( :email,:wachtwoord,:naam, :achternaam, :huisnummer, :postcode, :telefoonnummer)");
        $sql->execute([
            "email" => $email,
            "wachtwoord" => $wachtwoord,
            "naam" => $naam,
            "achternaam" => $achternaam, 
            "huisnummer" => $huisnummer,
            "postcode" => $postcode,
            "telefoonnummer" => $telefoonnummer
        ]);
    }

    
    public function login($email){
        $sql = $this->pdo->prepare("SELECT * from user WHERE email = :email");
        $sql->execute([
            "email" => $email,
        ]);
        $result = $sql->fetch();
        return $result;
    }


    
}
?>