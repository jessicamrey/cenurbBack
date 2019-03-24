<?php

namespace App\Repository;

use App\Entity\CensoColonia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CensoColonia|null find($id, $lockMode = null, $lockVersion = null)
 * @method CensoColonia|null findOneBy(array $criteria, array $orderBy = null)
 * @method CensoColonia[]    findAll()
 * @method CensoColonia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CensoColoniaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CensoColonia::class);
    }

//    /**
//     * @return CensoColonia[] Returns an array of CensoColonia objects
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
    public function findOneBySomeField($value): ?CensoColonia
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
