<?php

namespace App\Repository;

use App\Entity\Mahalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Mahalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mahalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mahalle[]    findAll()
 * @method Mahalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MahalleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mahalle::class);
    }

    // /**
    //  * @return Mahalle[] Returns an array of Mahalle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mahalle
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
