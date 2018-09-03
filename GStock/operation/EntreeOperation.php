<?php


class EntreeOperation  {
	
	public  function __construct() {}
	
	
	public  function ajouter($idFournisseur,$dateEntree){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql="insert into entree (idfournisseur,date_entree) values (".$idFournisseur.",'".$dateEntree."')";
		echo($sql);
		$monObjetBDD->executerSql($sql);
		
	}
	public  function lister(){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$resultat =$monObjetBDD->executerSql("select identree ,idfournisseur,date_entree from entree");
		return $resultat;
		
	}
}
