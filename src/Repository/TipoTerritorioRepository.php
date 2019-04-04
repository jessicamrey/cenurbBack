<?php

namespace App\Repository;

use App\Entity\TipoTerritorio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoTerritorio|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoTerritorio|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoTerritorio[]    findAll()
 * @method TipoTerritorio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoTerritorioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoTerritorio::class);
    }

//    /**
//     * @return TipoTerritorio[] Returns an array of TipoTerritorio objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoTerritorio
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
