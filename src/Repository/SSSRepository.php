<?php

namespace App\Repository;

use App\Entity\SSS;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SSS|null find($id, $lockMode = null, $lockVersion = null)
 * @method SSS|null findOneBy(array $criteria, array $orderBy = null)
 * @method SSS[]    findAll()
 * @method SSS[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SSSRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SSS::class);
    }

    // /**
    //  * @return SSS[] Returns an array of SSS objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SSS
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
