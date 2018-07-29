<?php




  class ClientOperation  {
  
  

  
  
  public  function __construct() {
      
      
  }
  
  
  public  function ajouter($raisonSocial,$nom,$prenom,$adresse,$ville,$codePostal,$pays,$telephone,$fax,$mail){
  	
  	require_once('../utils/ClasseBDDMysql.php');
  	$monObjetBDD= new ClasseBDDMysql();
  	$monObjetBDD->connect();
  	$sql="insert into client ( raison_social ,nom,prenom,adresse,ville,code_postal,pays,telephone,fax,mail)  values ('".$raisonSocial."','".$nom."','".$prenom."','".$adresse."',
								'".$ville."','".$codePostal."','".$pays."','".$telephone."','".$fax."','".$mail."')";
  	//echo($sql);
  	$monObjetBDD->executerSql($sql);
  	
  }
}

