<?php




  class ModelOperation  {
  
  

  
  
  public  function __construct() {
      
      
  }
  
  
  public  function ajouter($id,$libelle){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
  	$monObjetBDD->executerSql("insert into modele values (".$id.",'".$libelle."')");
  	
  }
}


