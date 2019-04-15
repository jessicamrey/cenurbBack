<?php

namespace App\Repository;

use App\Entity\VisitasColonia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VisitasColonia|null find($id, $lockMode = null, $lockVersion = null)
 * @method VisitasColonia|null findOneBy(array $criteria, array $orderBy = null)
 * @method VisitasColonia[]    findAll()
 * @method VisitasColonia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitasColoniaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VisitasColonia::class);
    }

    public function statAnno($especie, $anno)
    {
    	$query= $this->createQueryBuilder('v')
    	->select('sum(v.numNidos),sum(v.numNidosOcupados),sum(v.numNidosVacios),sum(v.numNidosExito), t.anno, c.especie')
    	->join('v.temporada', 't')
    	->join('v.colonia', 'c')
    	->andWhere('c.especie= :esp')
    	->groupBy('t.anno');
    	 
    	if($anno!=null){
    		$query->andWhere('v.temporada = :temp');
    		$query->setParameter('temp', $anno);
    	}
    	 
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
    
    
    public function statCcaa($especie, $temporada, $ccaa)
    {
    	$query= $this->createQueryBuilder('v')
    	->select('sum(v.numNidos),sum(v.numNidosOcupados),sum(v.numNidosVacios),sum(v.numNidosExito), c.ccaa, c.especie')
    	->join('v.colonia', 'c')
    	->andWhere('c.especie= :esp')
    	->andWhere('v.temporada = :temp')
    	->groupBy('c.ccaa');
    
    	 
    	if($ccaa!=null){
    		$query->andWhere('c.ccaa = :ccaa');
    		$query->setParameter('ccaa', $ccaa);
    	}
    	 
    	return $query->setParameter('esp', $especie)
    	->setParameter('temp', $temporada)
    	->getQuery()
    	->getResult();
    
    }
    
    
    public function statProvincia($especie, $temporada, $ccaa, $prov)
    {
    	$query= $this->createQueryBuilder('v')
    	->select('sum(v.numNidos),sum(v.numNidosOcupados),sum(v.numNidosVacios),sum(v.numNidosExito), c.ccaa,c.provincia, c.especie')
    	->join('v.colonia', 'c')
    	->andWhere('c.especie = :esp')
    	->andWhere('v.temporada = :temp')
    	->andWhere('c.ccaa = :ccaa')
    	->groupBy('c.provincia');
    	 
    	if($prov!=null){
    		$query->andWhere('c.provincia = :prov');
    		$query->setParameter('prov', $prov);
    	}
    	 
    	 
    	return $query->setParameter('esp', $especie)
    	->setParameter('temp', $temporada)
    	->setParameter('ccaa', $ccaa)
    	->getQuery()
    	->getResult();
    
    }
    
    public function statMunicipio($especie, $temporada, $ccaa, $prov, $mun)
    {
    	$query= $this->createQueryBuilder('v')
    	->select('sum(v.numNidos),sum(v.numNidosOcupados),sum(v.numNidosVacios),sum(v.numNidosExito), c.ccaa,c.provincia,c.municipio, c.especie')
    	->join('v.colonia', 'c')
    	->andWhere('c.especie = :esp')
    	->andWhere('v.temporada = :temp')
    	->andWhere('c.ccaa = :ccaa')
    	->andWhere('c.provincia = :prov')
    	->groupBy('c.municipio');
    
    	if($mun!=null){
    		$query->andWhere('c.municipio = :mun');
    		$query->setParameter('mun', $mun);
    	}
    
    
    	return $query->setParameter('esp', $especie)
    	->setParameter('temp', $temporada)
    	->setParameter('ccaa', $ccaa)
    	->setParameter('prov', $prov)
    	->getQuery()
    	->getResult();
    
    }
    
    public function statTipoEdificio($especie, $temporada, $ccaa, $prov, $mun, $tipo)
    {
    	$query= $this->createQueryBuilder('v')
    	->select('sum(v.numNidos),sum(v.numNidosOcupados),sum(v.numNidosVacios),sum(v.numNidosExito), c.especie, t.descripcion')
    	->join('v.colonia', 'c')
    	->join('c.tipoEdificio', 't')
    	->andWhere('c.especie = :esp')
    	->groupBy('t.descripcion');
    
    	if($temporada!=null){
    		$query->andWhere('v.temporada = :temp');
    		$query->setParameter('temp', $temporada);
    	}
    	if($ccaa!=null){
    		$query->andWhere('c.ccaa = :ccaa');
    		$query->setParameter('ccaa', $ccaa);
    	}
    	if($prov!=null){
    		$query->andWhere('c.provincia = :prov');
    		$query->setParameter('prov', $prov);
    	}
    	
    	if($mun!=null){
    		$query->andWhere('c.municipio = :mun');
    		$query->setParameter('mun', $mun);
    	}
    
    
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
}
