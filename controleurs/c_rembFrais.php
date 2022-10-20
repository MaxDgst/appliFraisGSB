<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
switch($action){
	case 'afficherMontants':{
		$lesMontants=$pdo->getMontants();
		include("vues/v_rembFrais.php");
		break;
	}
}
?>