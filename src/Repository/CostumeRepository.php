<?php

namespace App\Repository;

use App\Entity\Costume;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Costume|null find($id, $lockMode = null, $lockVersion = null)
 * @method Costume|null findOneBy(array $criteria, array $orderBy = null)
 * @method Costume[]    findAll()
 * @method Costume[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CostumeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Costume::class);
    }

    // /**
    //  * @return Costume[] Returns an array of Costume objects
    //  */
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
    public function findOneBySomeField($value): ?Costume
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
