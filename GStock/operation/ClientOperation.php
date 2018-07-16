<?php




  class ClientOperation  {
  
  

  
  
  public  function __construct() {
      
      
  }
  
  
  public  function ajouter($id,$raisonSocial,$nom,$prenom,$adresse,$ville,$codePostal,$pays,$telephone,$fax,$mail){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
  	$monObjetBDD->executerSql("insert into client values (".$id.",'".$raisonSocial."','".$nom."','".$prenom."','".$adresse."',
								'".$ville."','".$codePostal."','".$pays."','".$telephone."','".$fax."','".$mail."')");
  	
  }
}

