<?php

namespace App\Repository;

use App\Entity\FavoritosTerr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FavoritosTerr|null find($id, $lockMode = null, $lockVersion = null)
 * @method FavoritosTerr|null findOneBy(array $criteria, array $orderBy = null)
 * @method FavoritosTerr[]    findAll()
 * @method FavoritosTerr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FavoritosTerrRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FavoritosTerr::class);
    }

    // /**
    //  * @return FavoritosTerr[] Returns an array of FavoritosTerr objects
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
    public function findOneBySomeField($value): ?FavoritosTerr
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
