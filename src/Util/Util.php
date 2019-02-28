<?php

namespace App\Util;

class Util{
	
	
	public function isAdmin($idUsu)
	{
		//abrimos nuestro manager
		$entityManager = $this->getDoctrine()->getManager('default');
		 
		$sql = "
		SELECT
			`ID_USU`,
			`USU_COORD`
		FROM
			cenurb.seg_usu
		WHERE
			ID_USU= :id
		";
	
		$stmt = $entityManager->getConnection()->prepare($sql);
		$stmt->bindParam(':id', $idUsu, PDO::PARAM_STRING);
		$stmt->execute();
		
		$array= new ArrayCollection();
		$array=$stmt->fetchAll();
	
		$result= $array['0']['USU_COORD'] != 0;
		
		return $result;
	}
	
	
	public function existeUsuario($idUsu)
	{
		//TODO: Comprobar que ese id existe
	}
	
	public function existeEspecie($idEspecie)
	{
		//TODO: Comprobar que ese id existe
	}
	
	
	
	
	
}