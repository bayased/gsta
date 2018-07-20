<?php

require_once('../operation/FournisseurOperation.php');
$operation= new FournisseurOperation();

if($_POST['action']=='AJ'){
	$operation->ajouter($_POST['id'],$_POST['raisonSocial'],
			$_POST['adresse'],$_POST['ville'],$_POST['codePostal'],$_POST['pays'],$_POST['telephone'],$_POST['fax'],$_POST['mail']);
}

if($_POST['action']=='MO'){
	$operation->modifier($_POST['id'],$_POST['raisonSocial'],
			$_POST['adresse'],$_POST['ville'],$_POST['codePostal'],$_POST['pays'],$_POST['telephone'],$_POST['fax'],$_POST['mail']);
}

header('Location: ../index.html');
?>
