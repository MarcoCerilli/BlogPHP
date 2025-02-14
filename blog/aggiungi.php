<?php
    require __DIR__ . '/db.php';   // Connessione al database
    require __DIR__ . '/functions.php';   // Includi il file con la funzione aggiungiPost

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recupera i dati inviati dal form
        $titolo = $_POST['titolo'];
        $contenuto = $_POST['contenuto'];

        // Chiama la funzione aggiungiPost per inserire il post
        $successo = addPost($conn, $titolo, $contenuto);

        if ($successo) {
            header("location:index.php");
            exit();
        } else {
            echo "<p>Errore nell'aggiunta del post.</p>";
        }

        // Chiudi la connessione al database
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi un Nuovo Post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.html'; ?>

    <div class="container">
        <main class="content">
            <h2>Aggiungi un nuovo post</h2>
            <form action="aggiungi.php" method="POST">
                <label for="titolo">Titolo:</label>
                <input type="text" id="titolo" name="titolo" required>

                <label for="contenuto">Contenuto:</label>
                <textarea id="contenuto" name="contenuto" rows="4" required></textarea>

                <button type="submit">Aggiungi Post</button>
            </form>
        </main>
    </div>

    <?php include 'footer.html'; ?>

</body>
</html>