<?php


class SortieOperation  {
	
	public  function __construct() {}
	
	
	public  function ajouter($idclient,$datesortie){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql ="insert into sortie (idclient,date_sortie) values (".$idclient.",'".$datesortie."')";
		echo($sql);
		$monObjetBDD->executerSql($sql);
		
	}
}

