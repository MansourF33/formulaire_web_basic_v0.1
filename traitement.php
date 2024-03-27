

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Vérifier si les données sont soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // On récupère les données du formulaire si la condition est vérifiée
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Afficher les données soumises
    echo "<h2>Données reçues :</h2>";
    echo "<p>Nom : $nom </p>";
    echo "<p>Email : $email </p>";
    echo "<p>Message : $message </p>";

}
?>
