<?php

// Connexion à la base de données

$conn = new PDO("mysql:host=localhost;dbname=dbform;charset=utf8mb4", "Nums65", "coding", []);

// Requête avec PHP

$stmt = $conn->prepare("SELECT * FROM formulaire");
$stmt->execute();

// Récupération de tout les enregistrements sous forme de tableau

$formulaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($formulaire);