<?php 
require_once('../operation/MarqueOperation.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />
	 <title>Affichage en ligne avec Base de Donnees</title>
</head>
<?php
$operation= new MarqueOperation();
?>
<body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)
$NbrCol = 2;
$result2 =  $operation->lister ();
// -----------nombre de ligne dans le resultat---------------
$NbreLigne = mysql_num_rows($result2);
// -------------------------------------------------------
// affichage

if ($NbreLigne != 0) {
$j = 1;
echo 'vous avez '.$NbreLigne.' marque' ;
echo '<table border="1">';
echo '<tr> <td>ID</td> <td>Marque</td></tr>';

while ($ligne = mysql_fetch_array($result2)) {

   echo "<tr>";
   echo '<td>';
   echo $ligne['idmarque'];
   echo '</td>';
   echo '<td>';
   echo $ligne['libelle'];
   echo '</td>';
   echo "</tr>"; 
}

echo '</table>';
}
?>
<p><a href="../index.html"> Home page </a></p>
</body></html>