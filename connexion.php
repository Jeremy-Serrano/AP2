<?php 
function connect_bd($nomBd){ 
    $nomServeur="localhost";
    $login='root'; 
    $passWd=''; 
    try { 

        $cnx = new PDO("mysql:host=localhost;dbname=$nomBd", $login, $passWd); 
        $cnx->exec("SET CHARACTER SET utf8"); 
        /*echo "connecté !";*/ 
        return $cnx;
     } 
     catch (PDOException $e) { 
         print "Erreur !: " . $e->getMessage() . "<br/>"; 
         die(); return 0; 
        } 
    } 
    
    function deconnect_bd($nomBd) { 
        $nomBd = null; 
    }
?>