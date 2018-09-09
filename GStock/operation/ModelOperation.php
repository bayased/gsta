<?php




  class ModelOperation  {
  
  

  
  
  public  function __construct() {
      
      
  }
  
  
  public  function ajouter($id,$libelle,$idmarque,$idcategorie){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
	$sql ="insert into modele values ('','".$idmarque."','".$idcategorie."','".$libelle."')";
	//echo $sql;
  	$monObjetBDD->executerSql($sql);
  	
  }
}


