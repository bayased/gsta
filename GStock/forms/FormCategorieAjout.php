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
<h2> Ajout Categorie </h2> 
<form action="../action/CategorieAction.php" method="post">

<div><label for="id">Id categorie :</label>
<input type="text" name="id" disabled="disabled" /></div><br>    
   <div><label for="libelle">Libelle :</label>
   <input type="text" name="libelle" /></div> <br>
    <input type="hidden" name="action"  value="AJ"/>
    <input type="submit" value="Valider " />
</form>
</td>
</tr>
</table>  
</body>
</html>