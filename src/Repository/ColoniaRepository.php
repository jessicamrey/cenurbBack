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
    
    public function statAnno($especie)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c), t.anno')
    	->join('c.temporada', 't')
    	->andWhere('c.especie = :esp')
    	->groupBy('t.anno');
    	return $query->setParameter('esp', $especie)
    	->getQuery()
    	->getResult();
    
    }
    
    public function statCcaa($especie, $temporada)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c), c.ccaa')
    	->andWhere('c.especie = :esp')
    	->andWhere('c.temporada = :temp')
    	->groupBy('c.ccaa');
    	return $query->setParameter('esp', $especie)
    	->setParameter('temp', $temporada)
    	->getQuery()
    	->getResult();
    
    }
    
    public function statProvincia($especie, $temporada, $ccaa)
    {
    	$query= $this->createQueryBuilder('c')
    	->select('count(c), c.provincia, c.ccaa')
    	->andWhere('c.especie = :esp')
    	->andWhere('c.temporada = :temp')
    	->andWhere('c.ccaa = :ccaa')
    	->groupBy('c.provincia');
    	return $query->setParameter('esp', $especie)
    	->setParameter('temp', $temporada)
    	->setParameter('ccaa', $ccaa)
    	->getQuery()
    	->getResult();
    
    }

}
