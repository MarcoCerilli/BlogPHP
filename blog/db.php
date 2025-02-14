<?php

// Definizione delle credenziali per la connessione al database
$servername = "localhost"; // Indirizzo del server MySQL (di solito "localhost" per connessioni locali)
$username = "root"; // Nome utente per accedere al database
$password = "Reddino24!"; // Password per l'utente del database
$dbname = "blog"; // Nome del database a cui connettersi

// Creazione della connessione al database utilizzando MySQLi in modalità orientata agli oggetti
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo se la connessione è fallita
if ($conn->connect_error) {
    // Se c'è un errore, lo stampiamo e terminiamo l'esecuzione dello script
    echo "Connessione fallita: " . $conn->connect_error;
    exit();
}

// Imposta il charset della connessione a utf8mb4 per garantire il supporto a caratteri speciali e emoji
$conn->set_charset('utf8mb4');

?>

