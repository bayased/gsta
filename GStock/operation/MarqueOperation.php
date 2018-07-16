<?php

  class MarqueOperation  {
  
  

  
  
  public  function __construct() {
      
      
  }
  
  
  public  function ajouter($id,$libelle){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
  	$monObjetBDD->executerSql("insert into marque values (".$id.",'".$libelle."')");
  	
  }
  public  function lister(){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
    $resultat =$monObjetBDD->executerSql("select idmarque ,libelle from marque");
    return $resultat;
  	
  }
}

