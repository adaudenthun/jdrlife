<?php

namespace App\Repository;

use App\Entity\Univer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Univer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Univer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Univer[]    findAll()
 * @method Univer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UniverRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Univer::class);
    }

    // /**
    //  * @return Univer[] Returns an array of Univer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Univer
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
