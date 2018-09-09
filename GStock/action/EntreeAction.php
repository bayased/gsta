<?php
require_once('../operation/EntreeOperation.php');
$operation= new EntreeOperation();


if($_POST['AchBrDir']=='AJ'){
	$idEntree = $operation->ajouter($_POST['idfournisseur'],$_POST['dateentree']);

	$varCpt = $_POST['varCpt'];
	for ($i = 1; $i < $varCpt; $i++) {
		
		$idProduit  = $operation->ajouterProduit($_POST['idmodele'.$i],$_POST['numserie'.$i]);
					  $operation->ajouterDetailEntre($idEntree,$idProduit,$_POST['pu'.$i]);
	}
}

if($_POST['AchBrDir']=='MO'){
	$operation->modifier($_POST['idfournisseur'],$_POST['dateentree']);
}

header('Location: ../forms/ListeEntree.php');
?>