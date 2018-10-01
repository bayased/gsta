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
<h2> Ajout Sortie </h2> 	
<form action="../action/EntreeAction.php" method="post">

<div>
 <label for="selhyfhyfhect"> Client :</label>
 
 
<select name='idClient' id='idClient'>
 
        <?php
        require_once('../utils/ClasseBDDMysql.php');
        $monObjetBDD= new ClasseBDDMysql();
        $monObjetBDD->connect();
         
        $result2 = $monObjetBDD->executerSql("SELECT idclient,raison_social FROM  client ORDER BY raison_social");
        while ($donnees = mysql_fetch_array($result2))
        {
        ?>
            <option value='<?php echo $donnees[0];?>'><?php echo $donnees[1];?></option>;
        <?php
        }
       
        ?>
</select>
</div>
   <br>
   <div>  <label for="datesortie"> Date sortie :</label>
    <input type="date" name="datesortie">
   </div>
   <br>
   
 <table id="myTable" border="1">
  <tr>
    <td>ID</td>
    <td>Marque</td>
	<td>Modele</td>
	<td>Produit</td>
	<td>Prix Unitaire</td>
  </tr>
  <tr>
    <td>1</td>
    <td>
		<select name='idmarque1' id='idmarque1'>
	 
			<?php			 

			$result2 = $monObjetBDD->executerSql("SELECT ma.idmarque, ma.libelle FROM marque ma order by ma.libelle ");
			while ($donnees = mysql_fetch_array($result2))
			{
			?>
				<option value='<?php echo $donnees[0];?>'><?php echo $donnees[1];?></option>;
			<?php
			}		   
			?>
		</select>	
	
	</td>
	<td>
		<select name='idmodele1' id='idmodele1'>
		<option value='0'>-----</option>
	 			
		</select>	
	
	</td>
	<td>
	
		
		<select name='produit1' id='produit1'>
	 			
		</select>	
		
	</td>
	<td><input type="text" name="pu1" id="pu1"></td>
  </tr>
</table>  
 <br>

<input type="button" onclick="myFunction()" value="Ajouter une ligne"> </input>

<script>
function myFunction() {
	
	var cpt = document.getElementById("varCpt").value;
	//alert(cpt);
		
    var table = document.getElementById("myTable");
    var row = table.insertRow(cpt);
	
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	
	cell1.innerHTML =cpt;
    cell2.innerHTML = "<select name='idmodele"+cpt+"' id='idmodele"+cpt+"'> <?php $result2 = $monObjetBDD->executerSql('SELECT mo.idmodele, ma.libelle,mo.libelle FROM marque ma, modele mo where ma.idmarque = mo.idmarque order by ma.idmarque'); while ($donnees = mysql_fetch_array($result2)) { ?>  <option value='<?php echo $donnees[0];?>'><?php echo $donnees[1] .' -> '. $donnees[2];?></option>  <?php } ?> </select>";
    cell3.innerHTML = "<input type='text' name='numserie"+cpt+"' id='numserie"+cpt+"' siez='16'></input>";
	cell4.innerHTML = "<input type='text' name='pu"+cpt+"' id='pu"+cpt+"' siez='16'></input>";
	
	document.getElementById("varCpt").value = parseInt(cpt) + 1;
	
	
}

jQuery(document).ready(function($) {
    $("#idmarque1").on('change', function() {
        var marque = $(this).val();
        if(marque){
            $.ajax ({
                type: 'POST',
                url: '../action/GetResultForJaxa.php',
                data: { idmarque1: '' + marque + '' },
                success : function(htmlresponse) {
                    $('#idmodele1').html(htmlresponse);
                    console.log(htmlresponse);
                }
            });
        }
    });
});

jQuery(document).ready(function($) {
    $("#idmodele1").on('change', function() {
        var modele = $(this).val();
		alert(modele);
        if(modele){
            $.ajax ({
                type: 'POST',
                url: '../action/GetResultForJaxa.php',
                data: {idmodele1: '' + modele + ''},
                success : function(htmlresponse) {
                    $('#produit1').html(htmlresponse);
                    console.log(htmlresponse);
                }
            });
        }
    });
});
</script> 

 <br>
 <br> 
	<div> 
		<input type="submit" value="Valider " />
	</div>
	<br>
<div> 
<input type="hidden" name="AchBrDir"  value="AJ"/>
<input type="hidden" name="varCpt"  id="varCpt"  value="2"/>

</div> 
</form>

</td>
</tr>
</table>  
</body>
</html>