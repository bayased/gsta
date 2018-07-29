<?php 
require_once('../operation/EntreeOperation.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Affichage en ligne avec Base de Donnees</title>
</head>
<?php
$operation= new EntreeOperation();
?>
<body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 4;
$result2 =  $operation->lister ();
// -----------nombre de ligne dans le resultat---------------
$NbreLigne = mysql_num_rows($result2);
// -------------------------------------------------------
// affichage

if ($NbreLigne != 0) {
$j = 1;
echo 'vous avez '.$NbreLigne.' entree' ;
echo '<table border="1">';
echo '<tr> <td>ID</td> <td>Entree</td></tr>';

while ($ligne = mysql_fetch_array($result2)) {

   echo "<tr>";
   echo '<td>';
   echo $ligne['identree'];
   echo '</td>';
   echo '<td>';
   echo $ligne['idfournisseur'];
   echo '</td>';
   echo $ligne['date_entree'];
   echo '</td>';
   echo $ligne['numero_facture'];
   echo '</td>';
   echo "</tr>"; 
   
}

echo '</table>';
}
?>
<p><a href="../index.html"> Home page </a></p>
</body></html>
