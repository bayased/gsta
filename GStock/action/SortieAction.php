<?php
require_once('../operation/SortieOperation.php');
$operation= new SortieOperation();


if($_POST['AchBrDir']=='AJ'){
	$operation->ajouter($_POST['idclient'],$_POST['datesortie']);
}

if($_POST['AchBrDir']=='MO'){
	$operation->modifier($_POST['idclient'],$_POST['datesortie']);
}

header('Location: ../index.html');
?>
