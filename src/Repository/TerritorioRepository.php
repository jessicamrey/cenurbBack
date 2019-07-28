<?php

namespace App\Repository;

use App\Entity\Territorio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Territorio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Territorio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Territorio[]    findAll()
 * @method Territorio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TerritorioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Territorio::class);
    }

/**
     * Devuelve los  territorios en un radio especifico
     * @param float $radius
     * @param double $lat
     * @param double $long
     * @return Center[]
     */
    public function findByRadius($radius, $lat, $long, $especie)
    {
        $query= $this->createQueryBuilder('c')
                ->select('c')
                ->join('c.locNidos', 'l')
            	->andWhere('mydistance(l.lat, l.lon, :lat, :lon) <= :rad')
        		->andWhere('c.especie = :esp');
       			 $query->orderBy('mydistance(l.lat, l.lon, :lat, :lon) ' , 'ASC') ;
        return $query->setParameter('lat', $lat)
             ->setParameter('lon', $long)
             ->setParameter('rad', $radius)
             ->setParameter('esp', $especie)
             ->getQuery()
             ->getResult();
        
    }
    
    public function statAnno($especie, $anno)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c), t.anno')
    	->join('c.temporada', 't')
    	->andWhere('c.especie = :esp')
    	->groupBy('t.anno');
    	
    	if($anno!=null){
    		$query->andWhere('t.anno = :temp');
    		$query->setParameter('temp', $anno);
    	}
    	
    	
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
    
    public function statCcaa($especie, $anno, $ccaa)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c), c.ccaa')
    	->join('c.temporada', 't')
    	->andWhere('c.especie = :esp')
    	->groupBy('c.ccaa');
    	
    	if($anno!=null){
    		$query->andWhere('t.anno = :temp');
    		$query->setParameter('temp', $anno);
    	}
    	
    	if($ccaa!=null){
    		$query->andWhere('c.ccaa = :ccaa');
    		$query->setParameter('ccaa', $ccaa);
    	}
    	
    	
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
    
    public function statProvincia($especie, $anno, $ccaa, $prov)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c), c.provincia, c.ccaa')
    	->join('c.temporada', 't')
    	->andWhere('c.especie = :esp')
    	->groupBy('c.provincia');
    	
    	if($ccaa!=null){
    		$query->andWhere('c.ccaa = :ccaa');
    		$query->setParameter('ccaa', $ccaa);
    	}
    	 
    	 
    	if($anno!=null){
    		$query->andWhere('t.anno = :temp');
    		$query->setParameter('temp', $anno);
    	}
    	
    	if($prov!=null){
    		$query->andWhere('c.provincia = :prov');
    		$query->setParameter('prov', $prov);
    	}
    	
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
    
    public function stats($temporada, $ccaa, $provincia, $especie, $tipo)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c)')
    	->join('c.tipo', 't')
    	->andWhere('c.especie = :esp');
    	
    	if($temporada!=null){
    		$query->andWhere('c.temporada = :temp');
    		$query->setParameter('temp', $temporada);
    	}
    	if($ccaa!=null){
    		$query->andWhere('c.ccaa = :ccaa');
    		$query->setParameter('ccaa', $ccaa);
    	}
    	if($provincia!=null){
    		$query->andWhere('c.provincia = :prov');
    		$query->setParameter('prov', $provincia);
    	}
    	if($tipo!=null){
    	    $query->andWhere('t.descripcion= :tipo');
    	    $query->setParameter('tipo', $tipo);
    	}
    	
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
    
    public function countAnno($anno)
    {
        $query= $this->createQueryBuilder('c')
        ->select('count(c), t.anno')
        ->join('c.temporada', 't')
        ->groupBy('t.anno');
        
        if($anno!=null){
            $query->andWhere('t.anno = :temp');
            $query->setParameter('temp', $anno);
        }
        
        return $query
        ->getQuery()
        ->getResult();
        
    }
}
