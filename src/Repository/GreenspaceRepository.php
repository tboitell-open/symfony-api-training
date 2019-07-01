<?php
declare(strict_types=1);

namespace App\Repository;

use App\Entity\Greenspace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Greenspace|null find($id, $lockMode = null, $lockVersion = null)
 * @method Greenspace|null findOneBy(array $criteria, array $orderBy = null)
 * @method Greenspace[]    findAll()
 * @method Greenspace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GreenspaceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Greenspace::class);
    }

    public function findAllQueryBuilder()
    {
	    return $this->createQueryBuilder('greenspace');
    }
}
