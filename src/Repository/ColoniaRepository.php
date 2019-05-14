<?php

namespace App\Repository;

use App\Entity\Colonia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Colonia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Colonia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Colonia[]    findAll()
 * @method Colonia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColoniaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Colonia::class);
    }

    /**
     * Devuelve las colonias cercanas en un radio especifico
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
    
    public function stats($temporada, $ccaa, $provincia, $especie)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c)')
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
    	 
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }

}
