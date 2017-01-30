<table>
  <thead>
    <th>Id Client</th>
    <th>Date de commande</th>
    <th>Date d'expédition</th>
    <th>Id Commande</th>
    <th>Reference</th>
    <th>Id Statut</th>
  </thead>
  <tbody>
    <?php
    foreach ($listeCommande as $commande) {
      echo '<tr>';
      echo '<td>' . $commande->getClientId() . '</td>';
      echo '<td>' . $commande->getDateCmd() . '</td>';
      echo '<td>' . $commande->getDateExp() . '</td>';
      echo '<td>' . $commande->getId() . '</td>';
      echo '<td>' . $commande->getRef() . '</td>';
      echo '<td>' . $commande->getStatutId() . '</td>';

      
      echo '</tr>';

    }
    ?>

    <!-- Afficher ici le message d'erreur ou de confirmation lors d'une suppression -->
  </tbody>
</table>