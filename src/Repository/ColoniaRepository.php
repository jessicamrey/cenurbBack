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
    public function findByRadius($radius, $lat, $long)
    {
    	//TODO: Coger lat y lon de locNidos, faltará poner un join por aqui, o alomejor cogiendo solo el parametro ya funciona, buscar ejemplos
        $query= $this->createQueryBuilder('c')
                ->select('c')
                ->join('c.locNidos', 'l')
            	->andWhere('mydistance(l.lat, l.lon, :lat, :lon) <= :rad');
       			 $query->orderBy('mydistance(l.lat, l.lon, :lat, :lon) ' , 'ASC') ;
        return $query->setParameter('lat', $lat)
             ->setParameter('lon', $long)
             ->setParameter('rad', $radius)
             ->getQuery()
             ->getResult();
        
    }

}
