<?php

namespace App\Repository;

use App\Entity\Hizmetler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hizmetler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hizmetler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hizmetler[]    findAll()
 * @method Hizmetler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HizmetlerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hizmetler::class);
    }

    // /**
    //  * @return Hizmetler[] Returns an array of Hizmetler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hizmetler
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
