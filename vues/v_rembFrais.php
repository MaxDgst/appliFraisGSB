<div id="contenu">
      <h2>Montant des remboursements forfaitaires</h2>
<table>
            <?php
            echo "<tr> <th> </th> <th> Montant remboursé </th> </tr>";
            foreach ($lesMontants as $unMontant) {
                $libelle = $unMontant['libelle'];
                $montant = $unMontant['montant'];
                
                echo "<tr> <td> $libelle </td> <td> $montant </td> </tr>"; ?>
            <?php } ?>
        </table>
</div>