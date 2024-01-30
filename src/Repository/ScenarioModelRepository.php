<?php

namespace App\Repository;

use App\Entity\ScenarioModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ScenarioModel>
 *
 * @method ScenarioModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ScenarioModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ScenarioModel[]    findAll()
 * @method ScenarioModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ScenarioModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ScenarioModel::class);
    }

//    /**
//     * @return ScenarioModel[] Returns an array of ScenarioModel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ScenarioModel
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
