<?php

class CommandeRepository
{
	public function getAll($pdo) {
		$resultats = $pdo->query('SELECT c.client_id, c.date_cmd, c.date_expedition, c.id, c.ref, c.statut_id FROM commande c');

		$resultats->setFetchMode(PDO::FETCH_OBJ);
	
	$listeCommande = array();

		while($obj = $resultats->fetch()){	

			$commande = new Commande();
			$commande->setClientId($obj->client_id);
			$commande->setDateCmd($obj->date_cmd);
			$commande->setDateExp($obj->date_expedition);
			$commande->setId($obj->id);
			$commande->setRef($obj->ref);
			$commande->setStatutId($obj->statut_id);

			$listeCommande[] = $commande;

		}

		return $listeCommande;
	}
	
	
}