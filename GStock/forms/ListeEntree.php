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
// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)

$result2 =  $operation->lister ();
// -----------nombre de ligne dans le resultat---------------
$NbreLigne = mysql_num_rows($result2);
// -------------------------------------------------------
// affichage

if ($NbreLigne != 0) {
echo 'vous avez '.$NbreLigne.' entree' ;
echo '<table border="1">';
echo '<tr> <td>ID</td> <td>Entree</td> <td>Date entree</td></tr>';

while ($ligne = mysql_fetch_array($result2)) {

   echo "<tr>";
   echo '<td>';
   echo $ligne['identree'];
   echo '</td>';
   echo '<td>';
   echo $ligne['idfournisseur'];
   echo '</td>';
   echo '<td>';
   echo $ligne['date_entree'];
   echo '<td>';
   echo "</tr>"; 
   
}

echo '</table>';
}
?>
<p><a href="../index.html"> Home page </a></p>
</body></html>
