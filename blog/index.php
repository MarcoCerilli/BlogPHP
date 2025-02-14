
<?php
    require __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Mio Blog in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include 'header.html'; ?>

    
    <div class="container">
        <aside class="sidebar">
            <h2>Categorie</h2>
            <ul>
                <li><a href="#">Tecnologia</a></li>
                <li><a href="#">Programmazione</a></li>
            </ul>
        </aside>

        <main class="content">
              <!-- Link per accedere al form per aggiungere un nuovo post -->
        <a href="aggiungi.php" class="btn-aggiungi">Aggiungi un nuovo post</a>

            <?php
         
            // Query per ottenere i post
            $sql = "SELECT * FROM posts ORDER BY data DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<article class='post'>";
                    echo "<h2 class='post-titolo'>" . $row['titolo'] . "</h2>";
                    echo "<p class='post-contenuto'>" . $row['contenuto'] . "</p>";
                    echo "<a href='post.php?id=" . $row['id'] . "'>Leggi di più</a>";
                    echo "</article>";
                }
            } else {
                echo "<p>Nessun post disponibile.</p>";
            }

            $conn->close();
            ?>
        </main>
    </div>

    <?php include 'footer.html'; ?>

</body>
</html>
