 <?php
        require_once('../utils/ClasseBDDMysql.php');
        $monObjetBDD= new ClasseBDDMysql();
        $monObjetBDD->connect();
              
if(isset($_POST['idmarque1'])){
    $sql = "SELECT idmodele, libelle FROM modele WHERE idmarque = '".$_POST['idmarque1']."'";
	 $result = $monObjetBDD->executerSql($sql);  
        
    if (mysql_num_rows($result) > 0) {
		echo '<option value="0">-----</option>';
		while ($row = mysql_fetch_array($result)) {
            echo '<option value='.$row['idmodele'].'>'.$row['libelle'].'</option>';
        }
    }
    $sql = NULL;
}


if(isset($_POST['idmodele1'])){
    $sql = "SELECT idproduit, numserie FROM produit WHERE idmodele= ".$_POST['idmodele1']."' ";
	 $result = $monObjetBDD->executerSql($sql);  
        
    if (mysql_num_rows($result) > 0) {
		echo '<option value="0">******	</option>';
		while ($row = mysql_fetch_array($result)) {
            echo '<option value='.$row['idproduit'].'>'.$row['numserie'].'</option>';
        }
    }
    $sql = NULL;
}

?>