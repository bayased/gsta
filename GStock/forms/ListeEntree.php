<?php 
require_once('../operation/EntreeOperation.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<table style="width:100%" border=0> 
<tr>
<td style="width:30%">

<?php include "../utils/menuG.php"; ?>
</td>
<td style="width:70%"> 
<h2> Liste entree </h2> 
<?php
$operation= new EntreeOperation();

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
echo 'Vous avez '.$NbreLigne.' entree <br>' ;
echo '<table border="1">';
echo '<tr> <td>ID</td> <td>Fournisseur</td> <td>Date entree</td> <td>Detail</td> </tr>';

while ($ligne = mysql_fetch_array($result2)) {

   echo "<tr>";
   echo '<td>';
   echo $ligne['identree'];
   echo '</td>';
   echo '<td>';
   echo $ligne['raison_social'];
   echo '</td>';
   echo '<td>';
   echo $ligne['date_entree'];
   echo '</td>';

	echo '<td>';
   echo '<a href="../forms/listeDetailEntree.php?identree='.$ligne['identree'].'">Detail</a>';
   echo '</td>';
   echo "</tr>"; 
   
}

echo '</table>';
}
?>

</td>
</tr>
</table>  
</body>
</html>
