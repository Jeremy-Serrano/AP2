<?php
// On établit la connexion
require_once('connexion.php');
$cnx=connect_bd('boostrap');
if($cnx)
{
// ETAPE 5
//----- Gestion du type de requête ---------------//
//Si l'utilisateur a cliqué sur "Supprimer"
if (isset($_REQUEST['delete']))
{
$result = $cnx->prepare("DELETE FROM adherents WHERE idAdherents = :cle");
// On lie chaque marqueur à une variable
$result->bindParam(':cle', $idPersonne, PDO::PARAM_INT);
// On affecte une valeur aux variables liées aux marqueurx ":id" et ":editeur"
$idPersonne = $_REQUEST['cle'];
}
//Si l'utilisateur a cliqué sur "Modifier"
elseif (isset($_REQUEST['update']))
{
$result = $cnx->prepare("UPDATE adherents SET Nom=:Nom, Prenom=:Prenom, Age=:Age, ville=:ville, mail=:mail, Poste=:Poste , sportAvant=:sportAvant WHERE
idAdherents=:cle");
// On lie chaque marqueur à une variable
$result->bindParam(':Nom', $Nom, PDO::PARAM_STR);
$result->bindParam(':Prenom', $Prenom, PDO::PARAM_STR);
$result->bindParam(':Age', $Age, PDO::PARAM_INT);
$result->bindParam(':ville', $ville, PDO::PARAM_STR);
$result->bindParam(':mail', $mail, PDO::PARAM_STR);  
$result->bindParam(':Poste', $Poste, PDO::PARAM_STR);
$result->bindParam(':sportAvant', $sportAvant, PDO::PARAM_STR);

// On valorise chaque marqueur
$idPersonne = $_REQUEST['idAdherents'];
$Nom = $_REQUEST['Nom'];
$Prenom = addslashes($_REQUEST['Prenom']);
$Age = addslashes($_REQUEST['Age']);
$ville = addslashes($_REQUEST['ville']);
$mail = addslashes($_REQUEST['mail']);
$Poste = addslashes($_REQUEST['Poste']);
$sportAvant = addslashes($_REQUEST['sportAvant']);
}
// ETAPE 6
//Si une requête a été créée ci-dessus
if (isset($result))
{ // On l'exécute
$result->execute();
if ($result->rowCount()>0) // Elle a réussi
{ $num = ($result->rowCount());
$message = "$num enregistrement(s) traités";
echo $message;
}
}
// On prépare la requête (une seule fois)
$result = $cnx->prepare('SELECT * FROM adherents;');
// On exécute la requête
$result->execute();
// Si la requête renvoie au moins 1 ligne
if($result->rowCount()>0)
{ echo "<table border=\"1\">";
//entête du tableau
echo "<tr>";
echo "<th>Id</th>"; echo "<th>Nom</th>"; echo "<th>Prénom</th>"; echo
"<th>ville</th>";
// ETAPE 1 : Ajout de 2 colonnes pour afficher les boutons MODIFIER et SUPPRIMER
echo "<th colspan=2>Action</th>";
echo "</tr>";
//fin de l'entête
while ($donnees = $result->fetch())
{
// ETAPE 2 : Placer le tableau d’affichage des données dans un formulaire
echo "<form action=". $_SERVER['SCRIPT_NAME'] ." method='post'>";
// ETAPE 3 : Enregistrer dans un champ masqué (hidden) la clé de chaque enregistrement (id).
// On memorise la clé en champ caché pour permettre de la modifier
echo "<input type='hidden' name='cle' value='". $donnees['idAdherents'] . "'>"; echo
"<tr>";
// ETAPE 4 : Récupérer les données dans des champs de formulaire
echo "<td><input type='text' name='idAdherents' size='20'
value=".stripslashes($donnees ['idAdherents'])."></td>";
echo "<td><input type='text' name='Nom' size='20'
value='".stripslashes($donnees ['Nom'])."'></td>";
echo "<td><input type='text' name='Prenom' size='20'
value='".stripslashes($donnees ['Prenom'])."'></td>";
echo "<td><input type='text' name='Age' size='20'
value='".stripslashes($donnees ['Age'])."'></td>";
echo "<td><input type='text' name='ville' size='20'
value='".stripslashes($donnees ['ville'])."'></td>";
echo "<td><input type='text' name='mail' size='20'
value='".stripslashes($donnees ['mail'])."'></td>";
echo "<td><input type='text' name='Poste' size='20'
value='".stripslashes($donnees ['Poste'])."'></td>";
echo "<td><input type='text' name='sportAvant' size='20'
value='".stripslashes($donnees ['sportAvant'])."'></td>";
// ETAPE 1 (suite et fin)
echo "<td><input type='submit' name='update' value='Modifier'></td>";
echo "<td><input type='submit' name='delete' value='Supprimer'></td>"; echo '</tr>';
// ETAPE 2 (suite et fin)
echo "</form>"; //fin de formulaire
}
echo "</table>";
}
else { echo "Echec de l'enregistrement, désolé"; }
deconnect_bd('boxethaiacademy');
}
?>