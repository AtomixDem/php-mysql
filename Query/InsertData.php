<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "test";

$connessione = new mysqli($host, $user, $password, $database); // PHP ad oggetti: connessione creando un'instanza

if($connessione === false) {
    die("Errore di connessione: " . $connessione->connect_error);
}



$sql = "INSERT INTO utenti (Nome, Cognome, Username, Email) VALUES
('Luca', 'Rossi', 'Luks', 'luca.rossi@gmoil.com'),
('Gaia', 'Gialli', 'Gagi', 'gaia.gialli@gmoil.com'),
('Sara', 'Bianchi', 'Sasi', 'sara.bianchi@gmoil.com'),
('Marco', 'Neri', 'Marcolino', 'marco.neri@gmoil.com')
";

if($connessione->query($sql) === true) {
    echo "Utente inserito con successo.";
} else {
    echo "Errore durante inserimento: " . $connessione->error;
}



$connessione->close(); // Termina la connessione con il DB
?>
