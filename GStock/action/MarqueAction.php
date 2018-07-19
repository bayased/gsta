<?php
//inclure le fichier /operation/MarqueOperation.php une seule fois 
require_once('../operation/MarqueOperation.php');

//creation d'un nouveau object de type "MarqueOperation"
$operation= new MarqueOperation();

if($_POST['action']=='AJ'){ // si la valeur du champ hidden "action" qui est deja defini dans le formulaire html egale a la valeur "AJ" 
	$operation->ajouter($_POST['id'],$_POST['libelle']); //appeler la methode "ajouter"
}

if($_POST['action']=='MO'){// si la valeur du champ hidden "action" qui est deja defini dans le formulaire html egale a la valeur "MO" 
	$operation->modifier($_POST['id'],$_POST['libelle']); //appeler la methode "modifier"
}

header('Location: ../index.html'); // retour a la page ../index.html
?>