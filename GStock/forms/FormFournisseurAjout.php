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
<h2> Ajout Fournisseur </h2> 
<form action="../action/FournisseurAction.php" method="post">
<p>
    <div> <label for="id"> id :</label>
    <input type="text" name="id"  disabled	/></div>
   <div> <label for="raisonSocial"> Raison social :</label>
    <input type="text" name="raisonSocial" /></div>
   <div>  <label for="adresse"> Adresse :</label>
   <input type="text" name="adresse" /></div>
   <div> <label for="ville"> Ville :</label>
    <input type="text" name="ville" /></div>
   <div> <label for="codePostal"> Code postal :</label> 
   <input type="text" name="codePostal" /></div>
   <div> <label for="pays"> pays :</label>
    <input type="text" name="pays" /></div>
    <div> <label for="telephone"> telephone :</label> 
    <input type="text" name="telephone" /></div>
   <div> <label for="fax"> Fax :</label>  
   <input type="text" name="fax" /></div>
   <div> <label for="mail"> Mail :</label>
    <input type="text" name="mail" /></div>
    
<br>
    <input type="hidden" name="action"  value="AJ"/>
   <div>  <input type='submit' value='Valider' id='bouton_envoi'></div>
</p>

</form>
</td>
</tr>
</table>  
</body>