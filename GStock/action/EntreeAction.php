<?php
require_once('../operation/EntreeOperation.php');
$operation= new EntreeOperation();


if($_POST['AchBrDir']=='AJ'){
	$operation->ajouter($_POST['idfournisseur'],$_POST['dateentree']);
}

if($_POST['AchBrDir']=='MO'){
	$operation->modifier($_POST['idfournisseur'],$_POST['dateentree']);
}

header('Location: ../index.html');
?>