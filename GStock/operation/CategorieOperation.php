<?php




  class CategorieOperation  {
  
  

  
  
  public  function __construct() {
      
      
  }
  
  
  public  function ajouter($id,$libelle){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
  	$monObjetBDD->executerSql("insert into categorie values (".$id.",'".$libelle."')");
  	
  }
}

