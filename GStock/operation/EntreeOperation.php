<?php


class EntreeOperation  {
	
	public  function __construct() {}
	
	
	public  function ajouter($idFournisseur,$dateEntree){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql="insert into entree (idfournisseur,date_entree) values (".$idFournisseur.",'".$dateEntree."')";
		//echo($sql);
		$monObjetBDD->executerSql($sql);
		$idEntree= mysql_insert_id();
		
		return $idEntree;
		
	}

	public  function ajouterProduit($idmodele,$numserie){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql="insert into produit (idmodele,numserie) values (".$idmodele.",'".$numserie."')";
		//echo($sql);
		$monObjetBDD->executerSql($sql);
		$idProduit= mysql_insert_id();
		
		return $idProduit;
		
	}
	public  function ajouterDetailEntre($identree,$idproduit,$prix_unitaire){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql="insert into detail_entree (identree,idproduit,prix_unitaire) values (".$identree.",'".$idproduit."','".$prix_unitaire."')";
		//echo($sql);
		$monObjetBDD->executerSql($sql);
		$idProduit= mysql_insert_id();
		
		return $idProduit;
		
	}
	public  function lister(){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$resultat =$monObjetBDD->executerSql("select e.identree ,f.raison_social,e.date_entree from entree e, fournisseur f where e.idfournisseur = f.idfournisseur");
		return $resultat;
		
	}

	public  function DetailEntree2($identree){
		
		require_once('../utils/ClasseBDDMysql.php');
		$monObjetBDD= new ClasseBDDMysql();
		$monObjetBDD->connect();
		$sql="select ma.libelle, mo.libelle ,p.numserie, de.prix_unitaire
		from detail_entree de, produit p, modele mo, marque ma
		where de.idproduit = p.idproduit and p.idmodele=mo.idmodele and mo.idmarque=ma.idmarque and de.identree=".$identree."";
		
//echo $sql;
		$resultat =$monObjetBDD->executerSql($sql);
		return $resultat;
		
	}
	
		public  function DetailEntree($identree){
		
			require_once('../utils/ClasseBDDMysql.php');
			$monObjetBDD= new ClasseBDDMysql();
			$monObjetBDD->connect();
			$sql="select ma.libelle, mo.libelle ,p.numserie, de.prix_unitaire
			from detail_entree de
			join produit p on de.idproduit = p.idproduit
			join modele mo on p.idmodele=mo.idmodele
			join marque ma on mo.idmarque=ma.idmarque
			where  de.identree=".$identree."";
			
			$resultat =$monObjetBDD->executerSql($sql);
			return $resultat;
		
	}


}
