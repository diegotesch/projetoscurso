<?php

class Reservas
{
	private $pdo;

	public function __construct(PDO $pdo){
		$this->pdo = $pdo;
	}

	public function getReservas($inicio, $fim)
	{
		$array = array();

		$query = "select * from reservas where ( (:data_inicio not between data_inicio and data_fim) or (:data_fim not between data_inicio and data_fim) )";
		$stmt = $this->pdo->prepare($query);
		$stmt->bindValue(':data_inicio', $inicio);
		$stmt->bindValue(':data_fim', $fim);
		$stmt->execute();

		if($stmt->rowCount() > 0){
			$array = $stmt->fetchAll();
		}

		return $array;
	}

	public function verificarDisponibilidade($carro, $data_inicio, $data_fim)
	{
		$query = "select * from reservas where id_carro = :carro and ( (:data_inicio not between data_inicio and data_fim) or (:data_fim not between data_inicio and data_fim) )";

		// ( not(data_inicio > :data_inicio or data_fim < :data_fim) )
		$stmt = $this->pdo->prepare($query);
		$stmt->bindValue(':carro', $carro);
		$stmt->bindValue(':data_inicio', $data_inicio);
		$stmt->bindValue(':data_fim', $data_fim);
		$stmt->execute();

		if($stmt->rowCount() > 0){
			return false;
		}

		return true;
	}

	public function reservar($id_carro, $data_inicio, $data_fim, $pessoa)
	{
		$query = "insert into reservas (id_carro, data_inicio, data_fim, pessoa) values(:carro, :data_inicio, :data_fim, :pessoa)";
		$stmt = $this->pdo->prepare($query);
		$stmt->bindValue(':carro', $id_carro);
		$stmt->bindValue(':data_inicio', $data_inicio);
		$stmt->bindValue(':data_fim', $data_fim);
		$stmt->bindValue(':pessoa', $pessoa);
		$stmt->execute();
	}
}