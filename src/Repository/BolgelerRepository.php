<?php

namespace App\Repository;

use App\Entity\Bolgeler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bolgeler|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bolgeler|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bolgeler[]    findAll()
 * @method Bolgeler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BolgelerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bolgeler::class);
    }

    // /**
    //  * @return Bolgeler[] Returns an array of Bolgeler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bolgeler
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
