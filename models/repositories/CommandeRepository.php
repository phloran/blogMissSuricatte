<?php

class CommandeRepository
{
	public function getAll($pdo) {
		$resultats = $pdo->query('SELECT cp.quantite, p.libelle, c.date_cmd, c.date_expedition FROM commande_produit cp 
INNER JOIN produit p ON cp.prd_id = p.id
INNER JOIN commande c ON cp.com_id = c.id');

		$resultats->setFetchMode(PDO::FETCH_OBJ);
	
	$listeCommande = array();

		while($obj = $resultats->fetch()){	

			$commande = new Commande();
			$commande->setQuantite($obj->quantite);
			$commande->setLibelle($obj->libelle);
			$commande->setDateCmd($obj->date_cmd);
			$commande->setDateExp($obj->date_expedition);

			$listeCommande[] = $commande;

		}

		return $listeCommande;
	}
	
	
}



