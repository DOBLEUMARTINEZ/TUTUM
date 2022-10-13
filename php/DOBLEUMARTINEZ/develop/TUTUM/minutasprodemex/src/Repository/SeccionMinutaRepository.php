<?php

namespace App\Repository;

use App\Entity\SeccionMinuta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SeccionMinuta|null find($id, $lockMode = null, $lockVersion = null)
 * @method SeccionMinuta|null findOneBy(array $criteria, array $orderBy = null)
 * @method SeccionMinuta[]    findAll()
 * @method SeccionMinuta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeccionMinutaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeccionMinuta::class);
    }

    // /**
    //  * @return SeccionMinuta[] Returns an array of SeccionMinuta objects
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
    public function findOneBySomeField($value): ?SeccionMinuta
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
