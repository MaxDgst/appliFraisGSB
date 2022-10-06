<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idUtilisateur'];
$mois = getMois(date("d/m/Y"));
$numAnnee = substr($mois, 0, 4);
$numMois = substr($mois, 4, 2);
$action = $_REQUEST['action'];


$lesVisiteurs = $pdo->getVisiteurs();
$lesMois = $pdo->getLesMoisDisponibles('a55');
switch ($action) {
    case 'voirValiderFrais': {
            $pdo->getVisiteurs();
            $lesMois = $pdo->getLesMoisDisponibles('a55');
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            $lesCles = array_keys($lesMois);
            $moisASelectionner = $lesCles[0];
            include("vues/v_validerFrais.php");
            break;
        }
    case 'afficherFrais': {
            $visiteurs = $pdo->getVisiteurs();
            $mois = $pdo->getAllMoisIsset();
            $mois_visiteur = $_POST["lstMois"];

            $etat = $pdo->getEtatFicheUtilisateur($_POST["lstVisiteurs"], $mois_visiteur);

            if ($etat) {
                $date_fiche = dateAnglaisVersFrancais($etat["datefiche"]);

                $numAnnee_visiteur = substr($mois_visiteur, 0, 4);
                $numMois_visiteur = substr($mois_visiteur, 4, 2);

                $lesFraisForfait = $pdo->getLesFraisForfait($_POST["lstVisiteurs"], $mois_visiteur);

                $infos_visiteur = $pdo->getInfosUtilisateurByID($_POST["lstVisiteurs"]);
            }
            include("vues/v_validerFrais.php");
            include("vues/v_listeValiderFrais.php");
        }
    }