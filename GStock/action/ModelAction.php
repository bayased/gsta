<?php

require_once('../operation/ModelOperation.php');
$operation= new ModelOperation();

if($_POST['action']=='AJ'){
	$operation->ajouter($_POST['id'],$_POST['libelle'],$_POST['idmarque'],$_POST['idcategorie']);
}

if($_POST['action']=='MO'){
	$operation->modifier($_POST['id'],$_POST['libelle']);
}
header('Location: ../index.html');
?>