<div id="contenu">
      <h2>Validation des fiches de frais</h2>
      <fieldset>
        <legend><h3>Visiteur et Mois à sélectionner :</h3></legend>
        <label>Visiteur : </label>
        <select id="lstVisiteurs" name="lstVisiteurs">
        <?php
        foreach ($lesVisiteurs as $unVisiteur) {
            $visiteurNom = $unVisiteur['nom'];
            $visiteurPrenom = $unVisiteur['prenom'];
         ?>
            <option selected value=><?php echo $visiteurNom . " " . $visiteurPrenom?></option>
            <?php
        }
?>
</select>
<br><br>
      
        

        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option><br>
				<?php 
				}
			
			}

            

            ?>
                </p>
                </div>
                <div class="piedForm">
                <p><br>
                    <input id="ok" type="submit" value="Valider" size="20" />
                </p> 
                </div>
            </select>
            
      </fieldset>
      
</div>