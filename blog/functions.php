<?php
require __DIR__ . '/db.php'; 

// Funzione per ottenere i post con paginazione
function getPosts($conn, $offset, $limit) {
    $sql = "SELECT * FROM posts ORDER BY data DESC LIMIT ?, ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ii", $offset, $limit); // 'ii' per interi
        $stmt->execute();
        return $stmt->get_result(); 
    }
    return null;
}

// Funzione per ottenere il totale dei post
function getTotalPosts($conn) {
    $sql = "SELECT COUNT(*) AS total FROM posts";
    if ($result = $conn->query($sql)) {
        $row = $result->fetch_assoc();
        return $row['total'];
    }
    return 0;
}

// Funzione per aggiungere un nuovo post
function addPost($conn, $titolo, $contenuto) {
    $sql = "INSERT INTO posts (titolo, contenuto) VALUES (?, ?)";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $titolo, $contenuto); // 'ss' per stringhe
        return $stmt->execute();
    }
    return false;
}

// Funzione per eliminare un post
function deletePost($conn, $id) {
    $sql = "DELETE FROM posts WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id); // 'i' per intero
        return $stmt->execute();
    }
    return false;
}
?>
