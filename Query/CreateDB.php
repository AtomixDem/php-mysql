<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "test";

$connessione = new mysqli($host, $user, $password, $database); // Connessione al DB


$sql = "CREATE DATABASE db_prova"; // Comando che deve eseguire MySQL per creare un nuovo database

if($connessione->query($sql) == true) { // Verifichiamo che la creazione del DB è avvenuta con successo:
    echo "Database creato con successo.";
} else {
    echo "Errore creazione database: " . $connessione->error; // Stampa gli eventuali errori
}

$connessione->close(); // Termina la connessione con il DB
?>
