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
<h2> Ajout Modele </h2> 

<form action="../action/ModeLAction.php" method="post">

   <div><label for="libelle"> Id :</label> <input type="text" name="id"  disabled/></div><br>
  <div><label for="libelle"> Libelle:</label> <input type="text" name="libelle" /></div><br>
  
  <div>
 <label for="selhyfhyfhect"> Marque :</label>
 
 
<select name='idmarque' id='idmarque'>
 
        <?php
        require_once('../utils/ClasseBDDMysql.php');
        $monObjetBDD= new ClasseBDDMysql();
        $monObjetBDD->connect();
         
        $result2 = $monObjetBDD->executerSql("SELECT idmarque,libelle FROM  marque ORDER BY libelle");
        while ($donnees = mysql_fetch_array($result2))
        {
        ?>
            <option value='<?php echo $donnees[0];?>'><?php echo $donnees[1];?></option>;
        <?php
        }
       
        ?>
</select><br>
</div>
<br>
  <div>
 <label for="selhyfhyfhect"> Categorie :</label>
 
 
<select name='idcategorie' id='idcategorie'>
 
        <?php
        require_once('../utils/ClasseBDDMysql.php');
        $monObjetBDD= new ClasseBDDMysql();
        $monObjetBDD->connect();
         
        $result2 = $monObjetBDD->executerSql("SELECT idcategorie,libelle FROM categorie ORDER BY libelle");
        while ($donnees = mysql_fetch_array($result2))
        {
        ?>
            <option value='<?php echo $donnees[0];?>'><?php echo $donnees[1];?></option>;
        <?php
        }
       
        ?>
</select><br>
</div>

    <input type="hidden" name="action"  value="AJ"/><br>
    <input type="submit" value="Valider " />


</form>
</td>
</tr>
</table>  
</body>
</html>