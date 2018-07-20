<?php


class EntreeOperation  {
	
	public  function __construct() {}
	
	
	public  function ajouter($idFournisseur,$dateEntree){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$monObjetBDD->executerSql("insert into entree (idfournisseur,date_entree) values (".$idFournisseur.",'".$dateEntree."')");
		
	}
}
