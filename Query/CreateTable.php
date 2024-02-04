<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "test";

$connessione = new mysqli($host, $user, $password, $database); // Connessione al DB

/*
* CARATTERISTICHE QUERY:
* INT -> Tipologia di dato INTERO
* VARCHAR(30) -> Tipologia di dato STRINGA con lunghezza massima di 30 caratteri
* NOT NULL -> Non può essere nullo e deve essere inserito per forza
* PRIMARY KEY -> È il campo di riferimento per andare a vedere quel campo nella tabella
* UNIQUE -> Ogni dato inserito non può essere replicato ma deve essere unico
* AUTO_INCREMENT -> Si incrementa automaticamente
*/

$sql = "CREATE TABLE utenti(
    ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(30) NOT NULL,
    Cognome VARCHAR(30) NOT NULL,
    Username VARCHAR(30) NOT NULL,
    Email VARCHAR(70) NOT NULL UNIQUE
)";

if($connessione->query($sql) === true) {
    echo "Tabella creata con successo.";
} else {
    echo "Errore creazione database: " . $connessione->error;
}

$connessione->close(); // Termina la connessione con il DB
?>
