<?php

namespace App\Repository;

use App\Entity\article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method article|null find($id, $lockMode = null, $lockVersion = null)
 * @method article|null findOneBy(array $criteria, array $orderBy = null)
 * @method article[]    findAll()
 * @method article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class articleRepository extends ServiceEntityRepository
{

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, article::class);
    }

    /**
    * @return Article[] Returns an array of Article objects
    */
   public function findById()
   {
       return $this->createQueryBuilder('a')
           ->orderBy('a.id', 'DESC')
           ->setMaxResults(3)
           ->getQuery()
           ->getResult();
   }
}
