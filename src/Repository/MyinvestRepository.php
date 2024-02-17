<?php

namespace App\Repository;

use App\Entity\Myinvest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Myinvest>
 *
 * @method Myinvest|null find($id, $lockMode = null, $lockVersion = null)
 * @method Myinvest|null findOneBy(array $criteria, array $orderBy = null)
 * @method Myinvest[]    findAll()
 * @method Myinvest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyinvestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Myinvest::class);
    }

//    /**
//     * @return Myinvest[] Returns an array of Myinvest objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Myinvest
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
