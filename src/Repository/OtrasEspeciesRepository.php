<?php

namespace App\Repository;

use App\Entity\OtrasEspecies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method OtrasEspecies|null find($id, $lockMode = null, $lockVersion = null)
 * @method OtrasEspecies|null findOneBy(array $criteria, array $orderBy = null)
 * @method OtrasEspecies[]    findAll()
 * @method OtrasEspecies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OtrasEspeciesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, OtrasEspecies::class);
    }

//    /**
//     * @return OtrasEspecies[] Returns an array of OtrasEspecies objects
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
    public function findOneBySomeField($value): ?OtrasEspecies
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
