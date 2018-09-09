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
<h2> Detail entree  <?php echo $_GET['identree'] ?></h2> 
<?php
$operation= new EntreeOperation();

// $NbrCol : le nombre de colonnes
// $NbrLigne : calcul automatique a la FIN
// -------------------------------------------------------
// (exemple)

$result2 =  $operation->DetailEntree($_GET['identree']);
// -----------nombre de ligne dans le resultat---------------
$NbreLigne = mysql_num_rows($result2);
// -------------------------------------------------------
// affichage

if ($NbreLigne != 0) {
echo 'Vous avez '.$NbreLigne.' entree <br>' ;
echo '<table border="1">';
echo '<tr> <td>Marque</td> <td>Modele</td> <td>N° serie</td> <td>Prix unitaire</td> </tr>';

while ($ligne = mysql_fetch_array($result2)) {

   echo "<tr>";
   echo '<td>';
   echo $ligne[0];
   echo '</td>';
   echo '<td>';
   echo $ligne[1];
   echo '</td>';
   echo '<td>';
   echo $ligne[2];
   echo '</td>';

  echo '<td>';
   echo $ligne[3];
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
