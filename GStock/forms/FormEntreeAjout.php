<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>

</head>
<body>
<form action="../action/EntreeAction.php" method="post">

<div>
 <label for="selhyfhyfhect"> fournisseur :</label>
 
 
<select name='idfournisseur' id='idfournisseur'>
 
        <?php
        require_once('../utils/ClasseBDDMysql.php');
        $monObjetBDD= new ClasseBDDMysql();
        $monObjetBDD->connect();
         
        $result2 = $monObjetBDD->executerSql("SELECT idfournisseur,raison_social FROM  fournisseur ORDER BY raison_social");
        while ($donnees = mysql_fetch_array($result2))
        {
        ?>
            <option value='<?php echo $donnees[0];?>'><?php echo $donnees[1];?></option>;
        <?php
        }
       
        ?>
</select>
   </div>
   <div>  <label for="dateentree"> Date entrée :</label>
    <input type="date" name="dateentree">
  
   </div>
    <div> 
    <input type="submit" value="Valider " />
   
</div>
<div> 
<input type="hidden" name="AchBrDir"  value="AJ"/>
</div> 
</form>
<p><a href="../index.html"> Retour page principale </a></p>
        
</body>
</html>