<?php

namespace App\Repository;

use App\Entity\TemaMinuta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TemaMinuta|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemaMinuta|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemaMinuta[]    findAll()
 * @method TemaMinuta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemaMinutaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemaMinuta::class);
    }

    // /**
    //  * @return TemaMinuta[] Returns an array of TemaMinuta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TemaMinuta
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
