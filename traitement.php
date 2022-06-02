<?php
require_once('connexion.php');
$cnx=connect_bd('boostrap');
$result = $cnx->prepare('SELECT * FROM adherents');

$result->execute();

$listeFonctions = $result->fetchAll(PDO::FETCH_ASSOC);

$cnx=connect_bd('boostrap');

if ($cnx) {

    $result = $cnx->prepare('INSERT INTO adherents (Nom, Prenom, Age, ville, mail, Poste, sportAvant) 
    VALUES (:Nom, :Prenom, :Age, :ville, :mail, :Poste, :sportAvant)');

    $result->bindParam(':Nom', $Nom, PDO::PARAM_STR);
    $result->bindParam(':Prenom', $Prenom, PDO::PARAM_STR);
    $result->bindParam(':Age', $Age, PDO::PARAM_INT);
    $result->bindParam(':ville', $ville, PDO::PARAM_STR);
    $result->bindParam(':mail', $mail, PDO::PARAM_STR);  
    $result->bindParam(':Poste', $Poste, PDO::PARAM_STR);
    $result->bindParam(':sportAvant', $sportAvant, PDO::PARAM_STR);
   // $result->bindParam(':idCategorie', $idCategorie, PDO::PARAM_INT);
    //$result->bindParam(':idLigue', $idLigue, PDO::PARAM_INT);

   if (isset($_POST["Nom"])) {$Nom = $_POST["Nom"];}  
   echo "Nom : ".$Nom;
   if (isset($_POST["Prenom"])) {$Prenom = $_POST["Prenom"];}
   echo "Prenom : ".$Prenom;
   if (isset($_POST["Age"])) {$Age = $_POST["Age"];}
   if (isset($_POST["ville"])) {$ville = $_POST["ville"];}  
   if (isset($_POST["mail"])) {$mail = $_POST["mail"];}
   if (isset($_POST["Poste"])) {$Poste = $_POST["Poste"];}
   if (isset($_POST["sportAvant"])) {$sportAvant = $_POST["sportAvant"];} 
    //$idCategorie= $_POST["idCategorie"];
    //$idLigue = $_POST["idLigue"];

    $result->execute();

    // Résultats
    echo '<p>'.$result->rowCount()." ligne a été ajoutée dans la table adherents</p>";
    // On récupère le dernier id auto-incrémenté inséré
    $id=$cnx->lastInsertId();
    echo '<p>Son identifant est : '.$id.'</p>';

    //On utilise l'id pour insérer les enregistrements dans la table de relation membre_categorie
    //On récupère les données POST
     }
else {
    echo "erreur";
}

deconnect_bd('boostrap');
?>