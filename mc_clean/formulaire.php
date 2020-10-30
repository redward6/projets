<?php  

// Les données en provenance du formulaire

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$telfixe = $_POST["telfixe"];
$telmobile = $_POST["telmobile"];
$adress = $_POST["adress"];

// Connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=dbform;charset=utf8mb4", "Nums65","coding", []);

// Requête SQL
$sql = "INSERT INTO formulaire(nom,prenom,email,telfixe,telmobile,adress) VALUES (:nom, :prenom, :email, :telfixe, :telmobile, :adress)";

// Envoi de la requête SQL à la base de données
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':telfixe', $telfixe);
$stmt->bindParam(':telmobile', $telmobile);
$stmt->bindParam(':adress', $adress);
$stmt->execute();