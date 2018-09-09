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
<h2> Ajout Client </h2> 
<form action="../action/ClientAction.php" method="post">

   <div> <label for="id"> id :</label>
   <input type="text" name="id" disabled="disabled" /></div>
<br>
   <div> <label for="raisonSocial"> Raison social :</label>
   <input type="text" name="raisonSocial" /></div>
<br>
    <div>
    <label for="nom"> Nom :</label><input type="text" name="nom" /></div>
<br>
    <div><label for="prenoml"> Prenom :</label>
    <input type="text" id ="prenom" name="prenom" /></div>
<br>
    <div><label for="adresse"> Adresse :</label>
    <input type="text" name="adresse" /></div>
<br>
    <div><label for="ville"> Ville :</label>
    <input type="text" name="ville" /></div>
<br>
    <div><label for="codePostal"> Code postal :</label>
    <input type="text" name="codePostal" /></div>
<br>
    <div><label for="pays"> pays :</label>
    <input type="text" name="pays" /></div>
<br>
    <div>
    <label for="telephone"> telephone :</label> 
    <input type="text" name="telephone" /></div>
<br>
    <div><label for="fax"> Fax :</label> 
    <input type="text" name="fax" /></div>
<br>
    <div>
    <label for="mail"> Mail :</label>
    <input type="text" name="mail" /></div>
<br>
    <input type="hidden" name="action"  value="AJ"/>
    <input type='submit' value='Valider' id='bouton_envoi'>
 <span id='missPrenom'></span><br>

</form>

        <script>
            var formValid = document.getElementById('bouton_envoi');
            var prenom = document.getElementById('prenom');
            var missPrenom = document.getElementById('missPrenom');
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (prenom.validity.valueMissing){
                    event.preventDefault();
                    missPrenom.textContent = 'Prénom manquant';
                    missPrenom.style.color = 'red';
                }
            }
        </script>
</td>
</tr>
</table>  
</body>
</html>