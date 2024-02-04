<?php

/* ************** ALTERNATIVE ALLA CONNESSIONE DEL DB **************

$connessione = mysqli_connect($host, $user, $password, $database);

$connessione = new PDO("mysql:host=127.0.0.1; dbname=test", "root", ""); // Connessione con PDO

*/

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "test";

$connessione = new mysqli($host, $user, $password, $database); // PHP ad oggetti: connessione creando un'instanza

if($connessione === false) {
    die("Errore di connessione: " . $connessione->connect_error);
}

echo "Connessione avvenuta con successo: " . $connessione->host_info;


$connessione->close(); // Termina la connessione con il DB
?>
