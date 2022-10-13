<?php

namespace App\Repository;

use App\Entity\RegistroMinuta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RegistroMinuta|null find($id, $lockMode = null, $lockVersion = null)
 * @method RegistroMinuta|null findOneBy(array $criteria, array $orderBy = null)
 * @method RegistroMinuta[]    findAll()
 * @method RegistroMinuta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegistroMinutaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RegistroMinuta::class);
    }

    // /**
    //  * @return RegistroMinuta[] Returns an array of RegistroMinuta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RegistroMinuta
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
