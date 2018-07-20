<?php
class FournisseurOperation  {

	public  function __construct() {}
	
	
	public  function ajouter($id,$raisonSocial,$adresse,$ville,$codePostal,$pays,$telephone,$fax,$mail){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql = "insert into fournisseur (raison_social,adresse,ville,code_postale,pays,telephone,fax,mail)
		values ('".$raisonSocial."','".$adresse."','".$ville."','".$codePostal."','".$pays."','".$telephone."','".$fax."','".$mail."')";
			echo ($sql);
		$monObjetBDD->executerSql($sql);
		
	}
}


