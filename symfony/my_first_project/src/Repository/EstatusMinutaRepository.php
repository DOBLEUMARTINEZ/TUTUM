<?php

namespace App\Repository;

use App\Entity\EstatusMinuta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EstatusMinuta|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstatusMinuta|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstatusMinuta[]    findAll()
 * @method EstatusMinuta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstatusMinutaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstatusMinuta::class);
    }

    // /**
    //  * @return EstatusMinuta[] Returns an array of EstatusMinuta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EstatusMinuta
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
