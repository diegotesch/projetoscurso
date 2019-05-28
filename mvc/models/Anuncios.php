<?php
class Anuncios extends model{

	public function getQuantidade()
	{
		$sql = 'select count(*) as c from anuncios';
		$stmt = $this->db->query($sql);
		if($stmt->rowCount() > 0){
			$retorno = $stmt->fetch();
			return $retorno['c']; 
		}else{
			return 0;
		}
	}

}