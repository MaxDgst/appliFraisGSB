<div id="contenu">
<h3>Validation des fiches de frais : </h3>

<form action="index.php?uc=validerFrais&action=afficherFrais" method="post">
    <div class="corpsForm">

        <fieldset>
            <legend>Visiteurs et mois à sélectionner</legend>

            <p>
                <label for="lstVisiteurs" accesskey="n">Visiteur : </label>
                <select id="lstVisiteurs" name="lstVisiteurs">

                    <?php
                    foreach ($lesVisiteurs as $unVisiteur) {
                        $visiteurNom = $unVisiteur['nom'];
                        $visiteurPrenom =  $unVisiteur['prenom'];
                        $visiteurId = $unVisiteur['id'];
                        if ($mois == $moisASelectionner) {
                    ?>
                            <option selected value="<?= $visiteurId ?>"><?php echo $visiteurPrenom . " " . $visiteurNom ?> </option>
                        <?php
                        } else { ?>
                            <option value="<?= $visiteurId ?>"><?php echo $visiteurPrenom . " " . $visiteurNom ?> </option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </p>

            <p>

                <label for="lstMois" accesskey="n">Mois : </label>
                <select id="lstMois" name="lstMois">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee =  $unMois['numAnnee'];
                        $numMois =  $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                    ?>
                            <option selected value="<?php echo $mois ?>"><?php echo  $numMois . "/" . $numAnnee ?> </option>
                        <?php
                        } else { ?>
                            <option value="<?php echo $mois ?>"><?php echo  $numMois . "/" . $numAnnee ?> </option>
                    <?php
                        }
                    }

                    ?>

                </select>
            </p>
            <div class="piedForm">
                <p>
                    <input id="ok" type="submit" value="Valider" size="20" />
                </p>
            </div>
    </div>
