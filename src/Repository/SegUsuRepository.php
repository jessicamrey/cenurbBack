<?php

namespace App\Repository;

use App\Entity\SegUsu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SegUsu|null find($id, $lockMode = null, $lockVersion = null)
 * @method SegUsu|null findOneBy(array $criteria, array $orderBy = null)
 * @method SegUsu[]    findAll()
 * @method SegUsu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SegUsuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SegUsu::class);
    }

    // /**
    //  * @return SegUsu[] Returns an array of SegUsu objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SegUsu
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    
    public function countData()
    {
        $query= $this->createQueryBuilder('c')
        ->select('count(c)');

        return $query
        ->getQuery()
        ->getResult();
        
    }
}
