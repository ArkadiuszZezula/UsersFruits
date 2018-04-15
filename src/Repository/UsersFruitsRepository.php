<?php

namespace App\Repository;

use App\Entity\UsersFruits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UsersFruits|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsersFruits|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsersFruits[]    findAll()
 * @method UsersFruits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersFruitsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UsersFruits::class);
    }

//    /**
//     * @return UsersFruits[] Returns an array of UsersFruits objects
//     */
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
    public function findOneBySomeField($value): ?UsersFruits
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
