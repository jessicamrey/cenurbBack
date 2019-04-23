<?php

namespace App\Repository;

use App\Entity\VisitasTerritorio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VisitasTerritorio|null find($id, $lockMode = null, $lockVersion = null)
 * @method VisitasTerritorio|null findOneBy(array $criteria, array $orderBy = null)
 * @method VisitasTerritorio[]    findAll()
 * @method VisitasTerritorio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitasTerritorioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VisitasTerritorio::class);
    }

    
public function stats($especie, $temporada, $ccaa, $prov, $mun, $tipo)
    {
    	$query= $this->createQueryBuilder('v')
    	->select('count(*), te.anno, t.especie, t.ccaa, t.provincia, t.municipio, o.tipo')
    	->join('v.territorio', 't')
    	->join('t.temporada', 'te')
    	->join('v.observaciones', 'o')
    	->andWhere('c.especie = :esp');
    	
    
    	if($temporada!=null){
    		$query->andWhere('te.anno= :temp');
    		$query->setParameter('temp', $temporada);
    	}
    	if($ccaa!=null){
    		$query->andWhere('t.ccaa = :ccaa');
    		$query->setParameter('ccaa', $ccaa);
    	}
    	if($prov!=null){
    		$query->andWhere('t.provincia = :prov');
    		$query->setParameter('prov', $prov);
    	}
    	
    	if($mun!=null){
    		$query->andWhere('t.municipio = :mun');
    		$query->setParameter('mun', $mun);
    	}
    
    
    	return $query->setParameter('esp', $especie)
    	->groupBy('o.tipo')
    	->getQuery()
    	->getResult();
    
    }
}
