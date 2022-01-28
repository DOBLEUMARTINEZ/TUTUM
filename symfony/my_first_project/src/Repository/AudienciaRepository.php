<?php

namespace App\Repository;

use App\Entity\Audiencia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Audiencia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Audiencia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Audiencia[]    findAll()
 * @method Audiencia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AudienciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Audiencia::class);
    }

    // /**
    //  * @return Audiencia[] Returns an array of Audiencia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Audiencia
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
