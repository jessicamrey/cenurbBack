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

//    /**
//     * @return VisitasTerritorio[] Returns an array of VisitasTerritorio objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VisitasTerritorio
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
