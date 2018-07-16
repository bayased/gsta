<?php

require_once('../operation/ModelOperation.php');
$operation= new ModelOperation();

if($_POST['action']=='AJ'){
	$operation->ajouter($_POST['id'],$_POST['libelle']);
}

if($_POST['action']=='MO'){
	$operation->modifier($_POST['id'],$_POST['libelle']);
}
header('Location: ../index.html');
?>