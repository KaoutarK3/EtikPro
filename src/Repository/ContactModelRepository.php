<?php

namespace App\Repository;

use App\Entity\ContactModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContactModel>
 *
 * @method ContactModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactModel[]    findAll()
 * @method ContactModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactModel::class);
    }

//    /**
//     * @return ContactModel[] Returns an array of ContactModel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ContactModel
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
