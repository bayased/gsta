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
<h2> Ajout Marque </h2> 
<form action="../action/MarqueAction.php" method="post">

    <div><label for="id"> Id :</label>
    <input type="text" name="id" disabled/></div><br>
    <div><label for="libelle"> Libelle :</label>
    <input type="text" name="libelle" /></div><br>
    <input type="hidden" name="action"  value="AJ"/>
    <input type="submit" value="Valider " />
</form>

</td>
</tr>
</table>  
</body>