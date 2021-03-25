<?php

namespace App\Repository;

use App\Entity\Sousscategorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sousscategorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sousscategorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sousscategorie[]    findAll()
 * @method Sousscategorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SousscategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sousscategorie::class);
    }

    // /**
    //  * @return Sousscategorie[] Returns an array of Sousscategorie objects
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
    public function findOneBySomeField($value): ?Sousscategorie
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
