<?php

namespace App\Repository;

use App\Entity\FavoritosCol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FavoritosCol|null find($id, $lockMode = null, $lockVersion = null)
 * @method FavoritosCol|null findOneBy(array $criteria, array $orderBy = null)
 * @method FavoritosCol[]    findAll()
 * @method FavoritosCol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavoritosColRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FavoritosCol::class);
    }

    // /**
    //  * @return FavoritosCol[] Returns an array of FavoritosCol objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FavoritosCol
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
