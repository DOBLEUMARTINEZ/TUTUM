<?php

namespace App\Repository;

use App\Entity\TemaUsuario;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TemaUsuario|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemaUsuario|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemaUsuario[]    findAll()
 * @method TemaUsuario[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemaUsuarioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemaUsuario::class);
    }

    // /**
    //  * @return TemaUsuario[] Returns an array of TemaUsuario objects
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
    public function findOneBySomeField($value): ?TemaUsuario
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
