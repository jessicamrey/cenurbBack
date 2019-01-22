<?php

namespace App\Repository;

use App\Entity\Comunidades;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comunidades|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comunidades|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comunidades[]    findAll()
 * @method Comunidades[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComunidadesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Comunidades::class);
    }

//    /**
//     * @return Comunidades[] Returns an array of Comunidades objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Comunidades
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
