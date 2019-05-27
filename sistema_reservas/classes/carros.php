<?php

class Carros
{
	private $pdo;

	public function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}

	public function getCarros(){
		$array = array();

		$query = "select * from carros";
		$stmt = $this->pdo->query($query);

		if($stmt->rowCount() > 0){
			$array = $stmt->fetchAll();
		}

		return $array;
	}
}