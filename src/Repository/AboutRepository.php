<?php

namespace App\Repository;

use App\Entity\About;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method About|null find($id, $lockMode = null, $lockVersion = null)
 * @method About|null findOneBy(array $criteria, array $orderBy = null)
 * @method About[]    findAll()
 * @method About[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AboutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, About::class);
    }

//     /**
//      * @return About[] Returns an array of About objects
//      */
//
//    public function findByExampleField($value)
//    {
//        $qb  = $this->_em->createQueryBuilder();
//        return $this->createQueryBuilder('a')
//            ->where($qb->expr()->notIn('a.id', $value))
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }



    public function findOneBySomeField($value)
    {
        $qb  = $this->_em->createQueryBuilder();
        return $this->createQueryBuilder('a')
            ->where($qb->expr()->notIn('a.id', $value))
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }

}
