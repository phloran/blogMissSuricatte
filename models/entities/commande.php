<?php

class User 
{

	private $client_id;
	private $date_cmd;
	private $date_expedition;
	private $id;
	private $ref;
	private $statut_id;

	public function getClientId() {
		return $this->client_id;
	}

	public function setClientId($client_id) {
		$this->client_id = $client_id;
	}

	public function getDateCmd() {
		return $this->date_cmd;
	}

	public function setDateCmd($date_cmd) {
		$this->date_cmd = $date_cmd;
	}

	public function getDateExp() {
		return $this->date_expedition;
	}

	public function setDateExp($date_expedition) {
		$this->date_expedition = $date_expedition;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getRef() {
		return $this->ref;
	}

	public function setRef($ref) {
		$this->ref = $ref;
	}
	
		public function getStatutId() {
		return $this->statut_id;
	}

	public function setStatutId($statut_id) {
		$this->statut_id = $statut_id;
	}

}