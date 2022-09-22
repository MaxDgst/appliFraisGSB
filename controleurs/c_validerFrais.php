<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
switch($action){
	case 'validerFrais':{
        $lesVisiteurs=$pdo->getVisiteurs();
        $lesMois=$pdo->getLesMoisDisponibles($idUtilisateur);
		include("vues/v_validerFrais.php");
	}
}
$lesVisiteurs = $pdo->getVisiteurs();
?>