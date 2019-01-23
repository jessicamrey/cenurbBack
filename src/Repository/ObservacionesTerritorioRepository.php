<?php

namespace App\Repository;

use App\Entity\ObservacionesTerritorio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ObservacionesTerritorio|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObservacionesTerritorio|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObservacionesTerritorio[]    findAll()
 * @method ObservacionesTerritorio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObservacionesTerritorioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ObservacionesTerritorio::class);
    }

//    /**
//     * @return ObservacionesTerritorio[] Returns an array of ObservacionesTerritorio objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ObservacionesTerritorio
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
