<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idUtilisateur = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);


$lesVisiteurs=$pdo->getVisiteurs();
$lesMois=$pdo->getLesMoisDisponibles('a55');
include("vues/v_validerFrais.php");
switch($action){
	case 'validerFrais': {
		$pdo->getVisiteurs();
		$lesMois = $pdo->getLesMoisDisponibles('a55');
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys($lesMois);
		$moisASelectionner = $lesCles[0];

		break;
	}
case 'afficherFrais': {
		$leMois = $_REQUEST['lstMois'];
		$lesMois = $pdo->getLesMoisDisponibles($idUtilisateur);
		$moisASelectionner = $leMois;
		
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idUtilisateur, $leMois);
		$lesFraisForfait = $pdo->getLesFraisForfait($idUtilisateur, $leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idUtilisateur, $leMois);
		$numAnnee = substr($leMois, 0, 4);
		$numMois = substr($leMois, 4, 2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_listeValiderFrais.php");
	}
}