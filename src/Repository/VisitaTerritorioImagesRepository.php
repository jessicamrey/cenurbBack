<?php

namespace App\Repository;

use App\Entity\VisitaTerritorioImages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VisitaTerritorioImages|null find($id, $lockMode = null, $lockVersion = null)
 * @method VisitaTerritorioImages|null findOneBy(array $criteria, array $orderBy = null)
 * @method VisitaTerritorioImages[]    findAll()
 * @method VisitaTerritorioImages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitaTerritorioImagesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VisitaTerritorioImages::class);
    }

//    /**
//     * @return VisitaTerritorioImages[] Returns an array of VisitaTerritorioImages objects
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
    public function findOneBySomeField($value): ?VisitaTerritorioImages
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