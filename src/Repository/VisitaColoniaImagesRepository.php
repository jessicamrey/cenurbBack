<?php

namespace App\Repository;

use App\Entity\VisitaColoniaImages;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VisitaColoniaImages|null find($id, $lockMode = null, $lockVersion = null)
 * @method VisitaColoniaImages|null findOneBy(array $criteria, array $orderBy = null)
 * @method VisitaColoniaImages[]    findAll()
 * @method VisitaColoniaImages[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VisitaColoniaImagesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VisitaColoniaImages::class);
    }

//    /**
//     * @return VisitaColoniaImages[] Returns an array of VisitaColoniaImages objects
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
    public function findOneBySomeField($value): ?VisitaColoniaImages
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
