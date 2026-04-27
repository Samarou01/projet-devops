<?php
$conn = new mysqli("db", "root", "root", "testdb");

if ($conn->connect_error) {
    die("Connexion échouée");
}

echo "Connexion réussie 🚀";
?>
